window.CloudflareApps = window.Eager =
  window.CloudflareApps || window.Eager || {};
window.CloudflareApps = window.CloudflareApps || {};
CloudflareApps.siteId = "f91b3452e515ea9b7ba6e045121be4c7";
CloudflareApps.installs = CloudflareApps.installs || {};
(function () {
  CloudflareApps.internal = CloudflareApps.internal || {};
  var errors = [];
  CloudflareApps.internal.placementErrors = errors;
  var errorHashes = {};
  var noteError = function (options) {
    var hash =
      options.selector + "::" + options.type + "::" + (options.installId || "");
    if (errorHashes[hash]) return;
    errorHashes[hash] = true;
    errors.push(options);
  };
  var initializedSelectors = {};
  var currentInit = false;
  CloudflareApps.internal.markSelectors = function () {
    if (!currentInit) {
      check();
      currentInit = true;
      setTimeout(function () {
        currentInit = false;
      });
    }
  };
  var check = function () {
    var installs = window.CloudflareApps.installs;
    for (var installId in installs) {
      if (!installs.hasOwnProperty(installId)) continue;
      var selectors = installs[installId].selectors;
      if (!selectors) continue;
      for (var key in selectors) {
        if (!selectors.hasOwnProperty(key)) continue;
        var hash = installId + "::" + key;
        if (initializedSelectors[hash]) continue;
        var els = document.querySelectorAll(selectors[key]);
        if (els && els.length > 1) {
          noteError({
            type: "init:too-many",
            option: key,
            selector: selectors[key],
            installId: installId,
          });
          initializedSelectors[hash] = true;
          continue;
        } else if (!els || !els.length) {
          continue;
        }
        initializedSelectors[hash] = true;
        els[0].setAttribute("cfapps-selector", selectors[key]);
      }
    }
  };
  CloudflareApps.querySelector = function (selector) {
    if (selector === "body" || selector === "head") {
      return document[selector];
    }
    CloudflareApps.internal.markSelectors();
    var els = document.querySelectorAll('[cfapps-selector="' + selector + '"]');
    if (!els || !els.length) {
      noteError({
        type: "select:not-found:by-attribute",
        selector: selector,
      });
      els = document.querySelectorAll(selector);
      if (!els || !els.length) {
        noteError({
          type: "select:not-found:by-query",
          selector: selector,
        });
        return null;
      } else if (els.length > 1) {
        noteError({
          type: "select:too-many:by-query",
          selector: selector,
        });
      }
      return els[0];
    }
    if (els.length > 1) {
      noteError({
        type: "select:too-many:by-attribute",
        selector: selector,
      });
    }
    return els[0];
  };
})();
(function () {
  var prevEls = {};
  CloudflareApps.createElement = function (options, prevEl) {
    CloudflareApps.internal.markSelectors();
    try {
      if (prevEl && prevEl.parentNode) {
        var replacedEl;
        if (prevEl.cfAppsElementId) {
          replacedEl = prevEls[prevEl.cfAppsElementId];
        }
        if (replacedEl) {
          prevEl.parentNode.replaceChild(replacedEl, prevEl);
          delete prevEls[prevEl.cfAppsElementId];
        } else {
          prevEl.parentNode.removeChild(prevEl);
        }
      }
      var element = document.createElement("cloudflare-app");
      var container;
      try {
        container = CloudflareApps.querySelector(options.selector);
      } catch (e) {}
      if (!container) {
        return element;
      }
      if (
        !container.parentNode &&
        (options.method == "after" ||
          options.method == "before" ||
          options.method == "replace")
      ) {
        return element;
      }
      if (container == document.body) {
        if (options.method == "after") options.method = "append";
        else if (options.method == "before") options.method = "prepend";
      }
      switch (options.method) {
        case "prepend":
          if (container.firstChild) {
            container.insertBefore(element, container.firstChild);
            break;
          }
        case "append":
          container.appendChild(element);
          break;
        case "after":
          if (container.nextSibling) {
            container.parentNode.insertBefore(element, container.nextSibling);
          } else {
            container.parentNode.appendChild(element);
          }
          break;
        case "before":
          container.parentNode.insertBefore(element, container);
          break;
        case "replace":
          try {
            id = element.cfAppsElementId = Math.random().toString(36);
            prevEls[id] = container;
          } catch (e) {}
          container.parentNode.replaceChild(element, container);
      }
      return element;
    } catch (e) {
      if (
        typeof console !== "undefined" &&
        typeof console.error !== "undefined"
      ) {
        console.error("Error creating Cloudflare Apps element", e);
      }
    }
  };
})();
(function () {
  CloudflareApps.matchPage = function (patterns) {
    if (!patterns || !patterns.length) {
      return true;
    }
    if (
      window.CloudflareApps &&
      CloudflareApps.proxy &&
      CloudflareApps.proxy.originalURL
    ) {
      var url = CloudflareApps.proxy.originalURL.parsed;
      var loc = url.host + url.path;
    } else {
      var loc = document.location.host + document.location.pathname;
    }
    for (var i = 0; i < patterns.length; i++) {
      var re = new RegExp(patterns[i], "i");
      if (re.test(loc)) {
        return true;
      }
    }
    return false;
  };
})();
CloudflareApps.installs["EW8RxFIpLNBF"] = {
  appId: "lMxPPXVOqmoE",
  scope: {},
};
CloudflareApps.installs["EW8RxFIpLNBF"].options = {
  id: "UA-80705411-3",
};
if (
  CloudflareApps.matchPage(CloudflareApps.installs["EW8RxFIpLNBF"].URLPatterns)
) {
  (function (i, s, o, g, r, a, m) {
    i["GoogleAnalyticsObject"] = r;
    (i[r] =
      i[r] ||
      function () {
        (i[r].q = i[r].q || []).push(arguments);
      }),
      (i[r].l = 1 * new Date());
    (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m);
  })(
    window,
    document,
    "script",
    "//www.google-analytics.com/analytics.js",
    "ga"
  );
}
if (
  CloudflareApps.matchPage(CloudflareApps.installs["EW8RxFIpLNBF"].URLPatterns)
) {
  (function () {
    var options = CloudflareApps.installs["EW8RxFIpLNBF"].options;
    if (!options.id) return;
    window.ga("create", options.id, "auto");
    window.ga("send", "pageview");
    if (options.social) {
      (function (b) {
        (function (a) {
          "__CF" in b && "DJS" in b.__CF
            ? b.__CF.DJS.push(a)
            : "addEventListener" in b
            ? b.addEventListener("load", a, !1)
            : b.attachEvent("onload", a);
        })(function () {
          "FB" in b &&
            "Event" in FB &&
            "subscribe" in FB.Event &&
            (FB.Event.subscribe("edge.create", function (a) {
              _gaq.push(["_trackSocial", "facebook", "like", a]);
            }),
            FB.Event.subscribe("edge.remove", function (a) {
              _gaq.push(["_trackSocial", "facebook", "unlike", a]);
            }),
            FB.Event.subscribe("message.send", function (a) {
              _gaq.push(["_trackSocial", "facebook", "send", a]);
            }));
          "twttr" in b &&
            "events" in twttr &&
            "bind" in twttr.events &&
            twttr.events.bind("tweet", function (a) {
              if (a) {
                var b;
                if (a.target && a.target.nodeName == "IFRAME")
                  a: {
                    if ((a = a.target.src)) {
                      a = a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);
                      b = 0;
                      for (var c; (c = a[b]); ++b)
                        if (c.indexOf("url") === 0) {
                          b = unescape(c.split("=")[1]);
                          break a;
                        }
                    }
                    b = void 0;
                  }
                _gaq.push(["_trackSocial", "twitter", "tweet", b]);
              }
            });
        });
      })(window);
    }
  })();
  document.addEventListener('DOMContentLoaded', function () {
    const backdrop = document.getElementById('menu-backdrop'); // Assurez-vous d'avoir cet élément dans votre HTML

    // Fonction pour gérer les clics sur les boutons de menu
    function handleMenuClick(buttonClass, contentClass) {
        document.querySelectorAll(buttonClass).forEach(button => {
            button.addEventListener('click', function () {
                const dropdownContent = this.nextElementSibling;
                const arrow = this.querySelector('.arrow');
                const isActive = dropdownContent.classList.contains('active');

                // Fermer tous les autres menus déroulants du même type
                document.querySelectorAll(contentClass).forEach(content => {
                    if (content !== dropdownContent) {
                        content.classList.remove('active');
                        content.style.maxHeight = '0';
                        content.style.padding = '0 10px';
                        if (content.previousElementSibling) {
                            content.previousElementSibling.querySelector('.arrow').classList.remove('active');
                        }
                    }
                });

                if (!isActive) {
                    dropdownContent.classList.add('active');
                    dropdownContent.style.maxHeight = dropdownContent.scrollHeight + 'px';
                    dropdownContent.style.padding = '1px';
                    if (arrow) arrow.classList.add('active');
                    backdrop.style.display = 'block'; // Affiche le fond lorsqu'un menu est actif
                } else {
                    dropdownContent.classList.remove('active');
                    dropdownContent.style.maxHeight = '0';
                    dropdownContent.style.padding = '0 10px';
                    if (arrow) arrow.classList.remove('active');
                    // Check if any dropdown is still active
                    if (!document.querySelectorAll('.main-dropdown-content.active, .rp-dropdown-content.active').length) {
                        backdrop.style.display = 'none'; // Cache le fond si aucun menu n'est actif
                    }
                }
            });
        });
    }


    // Gérer les clics sur les menus principaux
    handleMenuClick('.main-dropbtn', '.main-dropdown-content');

    // Gérer les clics sur les menus RP
    handleMenuClick('.rp-dropbtn', '.rp-dropdown-content');

    // Gestion des liens dans les menus déroulants
    document.querySelectorAll('.main-dropdown-content a, .rp-dropdown-content a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelectorAll('.main-dropdown-content a, .rp-dropdown-content a').forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');

            const targetSection = document.querySelector(this.getAttribute('href'));
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });
            targetSection.classList.add('active');
            backdrop.style.display = 'none'; // Cache le fond lorsqu'une option de menu est cliquée
        });
    });

    // Ajouter un gestionnaire d'événement pour fermer les menus lorsque le fond est cliqué
    if (backdrop) {
        backdrop.addEventListener('click', function () {
            document.querySelectorAll('.main-dropdown-content, .rp-dropdown-content').forEach(content => {
                content.classList.remove('active');
                content.style.maxHeight = '0';
                content.style.padding = '0 10px';
                const arrow = content.previousElementSibling.querySelector('.arrow');
                if (arrow) arrow.classList.remove('active');
            });
            backdrop.style.display = 'none';
        });
    }
});



function searchContent() {
  var input, filter, mainContent, sections, section, i, txtValue, results, li;
  input = document.getElementById('search-input');
  filter = input.value.toLowerCase();
  mainContent = document.getElementById('main-content');
  sections = mainContent.getElementsByTagName('section');
  results = document.getElementById('search-results');
  
  // Clear previous results
  results.innerHTML = '';
  
  for (i = 0; i < sections.length; i++) {
      section = sections[i];
      txtValue = section.textContent || section.innerText;
      if (txtValue.toLowerCase().indexOf(filter) > -1) {
          li = document.createElement('li');
          li.className = 'list-group-item';
          li.innerHTML = section.querySelector('h2').innerText;
          li.setAttribute('data-id', section.id);
          li.onclick = function() {
              document.getElementById(this.getAttribute('data-id')).scrollIntoView({behavior: 'smooth'});
          };
          results.appendChild(li);
      }
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const dropdowns = document.querySelectorAll('.rp-dropdown');

  dropdowns.forEach(dropdown => {
      const btn = dropdown.querySelector('.rp-dropbtn');
      const content = dropdown.querySelector('.rp-dropdown-content');

      btn.addEventListener('click', function() {
          // Fermer tous les autres menus déroulants
          dropdowns.forEach(item => {
              if (item !== dropdown) {
                  item.querySelector('.rp-dropdown-content').style.maxHeight = '0';
                  item.querySelector('.rp-dropdown-content').classList.remove('active');
                  item.querySelector('.rp-dropbtn').classList.remove('active');
              }
          });

          // Alterner le menu déroulant cliqué
          if (content.classList.contains('active')) {
              content.style.maxHeight = '0';
          } else {
              content.style.maxHeight = content.scrollHeight + 'px';
          }
          content.classList.toggle('active');
          btn.classList.toggle('active');
      });
  });
});




// Get the button
let backToTopBtn = document.getElementById("backToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}




  const cards = document.querySelector('.cards');
  let currentIndex = 0;
  
  function moveCards() {
      const cardWidth = document.querySelector('.card-accueil').clientWidth;
      const totalCards = document.querySelectorAll('.card-accueil').length;
  
      currentIndex++;
      if (currentIndex >= totalCards) {
          currentIndex = 0;
      }
  
      cards.style.transform = `translateX(-${currentIndex * (cardWidth + 20)}px)`;
  }
  
  setInterval(moveCards, 2000);
  
}


// Get the button
let backToTopBtn = document.getElementById("backToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


function toggleMenu() {
  var menu = document.getElementById('fixed-container');

  if (menu.classList.contains('active')) {
    menu.animate([
      { maxHeight: '500px', opacity: 1 },
      { maxHeight: '0', opacity: 0 }
    ], {
      duration: 500,
      easing: 'ease-in-out'
    }).onfinish = function() {
      menu.classList.remove('active');
    };
  } else {
    menu.classList.add('active');
    menu.animate([
      { maxHeight: '0', opacity: 0 },
      { maxHeight: '500px', opacity: 1 }
    ], {
      duration: 500,
      easing: 'ease-in-out'
    });
  }
}

// Fonction pour le défilement fluide
document.getElementById('goto-reglement').addEventListener('click', function(event) {
  event.preventDefault();
  var targetId = this.getAttribute('href').split('#')[1];
  var targetElement = document.getElementById(targetId);

  if (targetElement) {
    window.scrollTo({
      top: targetElement.offsetTop,
      behavior: 'smooth'
    });
  }
});


document.addEventListener('DOMContentLoaded', function() {
  // Rendre la section "Règlement HRP" visible par défaut
  document.getElementById('reglementhrp').classList.add('active');

  document.getElementById('goto-reglement').addEventListener('click', function(event) {
      event.preventDefault();

      // Cacher toutes les sections
      document.querySelectorAll('.content-section').forEach(section => {
          section.classList.remove('active');
      });

      // Afficher la section "Règlement HRP"
      document.getElementById('reglementhrp').classList.add('active');
  });
});
