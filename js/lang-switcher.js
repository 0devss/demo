/**
 * Language Switcher — Auto-detects current page and builds correct URLs
 * Works for: English (root), German (/de/), Punjabi (/pa/)
 *
 * HOW IT WORKS:
 *   - On /about.html          → links to /de/about.html  and /pa/about.html
 *   - On /de/contact.html     → links to /contact.html   and /pa/contact.html
 *   - On /pa/services.html    → links to /services.html  and /de/services.html
 */

(function () {
  const LANGS = [
    { code: "en", label: "English", flag: "🇬🇧", folder: "" },
    { code: "de", label: "Deutsch", flag: "🇩🇪", folder: "de" },
    { code: "pa", label: "ਪੰਜਾਬੀ",  flag: "🇮🇳", folder: "pa" },
  ];

  /**
   * Detect the base path (everything before the language folder or page).
   * e.g. /rmc/demo/de/about.php → basePath = "/rmc/demo/"
   *      /rmc/demo/about.php    → basePath = "/rmc/demo/"
   */
  function getBasePath() {
    const path = window.location.pathname;

    for (const lang of LANGS) {
      if (lang.folder === "") continue;
      const marker = "/" + lang.folder + "/";
      const idx = path.indexOf(marker);
      if (idx !== -1) {
        return path.slice(0, idx + 1); // includes trailing slash
      }
    }

    // English (root): base path is everything up to the filename
    return path.substring(0, path.lastIndexOf("/") + 1);
  }

  /**
   * Given the current pathname, return the page filename
   * and which language we're currently on.
   */
  function parseCurrentPath() {
    const path = window.location.pathname;
    const basePath = getBasePath();

    for (const lang of LANGS) {
      if (lang.folder === "") continue;
      const prefix = basePath + lang.folder + "/";
      if (path.startsWith(prefix)) {
        const page = path.slice(prefix.length) || "index.php";
        return { currentLang: lang.code, page, basePath };
      }
    }

    // Default: English
    const page = path.slice(basePath.length) || "index.php";
    return { currentLang: "en", page, basePath };
  }

  /**
   * Build the URL for a given language and page.
   */
  function buildUrl(langFolder, page, basePath) {
    const base = window.location.origin;
    if (langFolder === "") {
      return base + basePath + page;
    }
    return base + basePath + langFolder + "/" + page;
  }

  /**
   * Inject the language switcher into the element with id="lang-switcher"
   * (or create and append to navbar if element not found).
   */
  function renderSwitcher() {
    const { currentLang, page, basePath } = parseCurrentPath();

    const current = LANGS.find((l) => l.code === currentLang);

    // Build dropdown HTML
    const dropdownItems = LANGS.filter((l) => l.code !== currentLang)
      .map(
        (l) =>
          `<a href="${buildUrl(l.folder, page, basePath)}" class="ls-option" lang="${l.code}">
            <span class="ls-flag">${l.flag}</span>
            <span class="ls-label">${l.label}</span>
          </a>`
      )
      .join("");

    const html = `
      <div class="ls-wrapper" id="ls-wrapper">
        <button class="ls-trigger" id="ls-trigger" aria-haspopup="listbox" aria-expanded="false">
          <span class="ls-flag">${current.flag}</span>
          <span class="ls-label">${current.label}</span>
          <svg class="ls-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </button>
        <div class="ls-dropdown" id="ls-dropdown" role="listbox">
          ${dropdownItems}
        </div>
      </div>
    `;

    // Try to inject into a provided anchor element
    let anchor = document.getElementById("lang-switcher");
    if (!anchor) {
      // Fallback: append to first <nav> found
      anchor = document.querySelector("nav");
    }
    if (!anchor) {
      console.warn("[LangSwitcher] No #lang-switcher or <nav> element found.");
      return;
    }

    anchor.insertAdjacentHTML("beforeend", html);

    // Toggle open/close
    const trigger = document.getElementById("ls-trigger");
    const dropdown = document.getElementById("ls-dropdown");
    const wrapper = document.getElementById("ls-wrapper");

    trigger.addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = wrapper.classList.toggle("ls-open");
      trigger.setAttribute("aria-expanded", isOpen);
    });

    // Close on outside click
    document.addEventListener("click", () => {
      wrapper.classList.remove("ls-open");
      trigger.setAttribute("aria-expanded", "false");
    });

    // Close on Escape
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        wrapper.classList.remove("ls-open");
        trigger.setAttribute("aria-expanded", "false");
      }
    });
  }

  // Run after DOM is ready
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", renderSwitcher);
  } else {
    renderSwitcher();
  }
})();
