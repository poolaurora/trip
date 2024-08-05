<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .animated-lightbox {
        transition: visibility 0.5s, opacity 0.5s;
        visibility: hidden;
        opacity: 0;
      }

      .show-lightbox {
        opacity: 1;
        display: block !important;
        visibility: visible;
      }
    </style>
    <link rel="preconnect" href="https://styles.assets-landingi.com/">
    <link rel="preconnect" href="https://old.assets-landingi.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://images.assets-landingi.com/">
    <link rel="preconnect" href="https://cdn.lugc.link/">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="/images/logo branca.png">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="/images/branco- contemporaneo.svg">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="https://cdn.lugc.link/d85e4240-463b-4784-b35e-1271dd601140/-/format/auto/-/stretch/off/-/resize/310x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="/images/branco- traffo.svg">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="https://cdn.lugc.link/89969ea8-cdae-4abd-8806-ad7a71405871/-/format/auto/-/stretch/off/-/resize/310x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="https://cdn.lugc.link/e2d9f1c7-b63b-41bc-ba40-3fcb56100b4e/-/format/auto/-/stretch/off/-/resize/310x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="/images/branco- casa itaim.svg">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px) and ((-webkit-max-device-pixel-ratio: 1.9) or (max-resolution: 1.9dppx))" as="image" href="/images/logo branca.png">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px) and ((-webkit-max-device-pixel-ratio: 1.9) or (max-resolution: 1.9dppx))" as="image" href="/images/branco- contemporaneo.svg">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px) and ((-webkit-max-device-pixel-ratio: 1.9) or (max-resolution: 1.9dppx))" as="image" href="/images/branco- traffo.svg">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px) and ((-webkit-max-device-pixel-ratio: 1.9) or (max-resolution: 1.9dppx))" as="image" href="/images/branco- casa itaim.svg">
    <link rel="preload" fetchpriority="high" media="(min-width: 764px) and (max-width: 959px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/x650/">
    <link rel="preload" fetchpriority="high" media="(min-width: 960px) and (max-width: 1024px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/x650/">
    <link rel="preload" fetchpriority="high" media="(min-width: 1025px) and (max-width: 1200px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/1200x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 1201px) and (max-width: 1500px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/1500x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 1501px) and (max-width: 1800px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/1800x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 1801px) and (max-width: 2999px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/2999x/">
    <link rel="preload" fetchpriority="high" media="(min-width: 3000px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/x650/">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px)" as="image" href="https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px)" as="image" href="https://cdn.lugc.link/d85e4240-463b-4784-b35e-1271dd601140/-/format/auto/-/stretch/off/-/resize/310x/">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px)" as="image" href="https://cdn.lugc.link/89969ea8-cdae-4abd-8806-ad7a71405871/-/format/auto/-/stretch/off/-/resize/310x/">
    <link rel="preload" fetchpriority="high" media="(max-width: 763px)" as="image" href="https://cdn.lugc.link/e2d9f1c7-b63b-41bc-ba40-3fcb56100b4e/-/format/auto/-/stretch/off/-/resize/310x/">
    <script type="text/javascript" async="" src="/js/js"></script>
    <script type="text/javascript" async="" src="/js/js(1)"></script>
    <script type="text/javascript" async="" src="/js/analytics.js"></script>
    <script type="text/javascript" async="" src="/js/identify_c2008b8c.js"></script>
    <script type="text/javascript" async="" src="/js/main.MTc2ZTRjM2Y4MA.js" data-id="C7SSHNGFLK2NRAISUDLG"></script>
    <script async="" src="/js/clarity.js"></script>
    <script async="" src="/js/lnbikkwj8c"></script>
    <script type="text/javascript" async="" src="/js/events.js"></script>
    <script type="text/javascript" async="" src="/js/fbevents.js"></script>
    <script type="text/javascript" async="" src="/js/js(2)"></script>
    <script type="text/javascript" async="" src="/js/analytics.js"></script>
    <script type="text/javascript" async="" src="/js/js(3)"></script>
    <script async="" src="/js/gtm.js"></script>
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-5XZGHGP');
    </script>
    <script type="text/javascript" async="" src="/js/js(4)"></script>
    <script type="text/javascript" async="" src="/js/js(5)"></script>
    <script src="/js/1602226210028016" async=""></script>
    <script src="/js/1263631817540997" async=""></script>
    <script async="" src="/js/fbevents.js"></script>
    <script fetchpriority="high">
      (function(src, cb) {
        var s = document.createElement('script');
        s.setAttribute('src', src);
        s.setAttribute('fetchpriority', 'high');
        s.onload = cb;
        (document.head || document.body).appendChild(s);
      })('https://ucarecdn.com/libs/blinkloader/3.x/blinkloader.min.js', function() {
        window.Blinkloader.optimize({
          fadeIn: false,
          lazyload: true,
          smartCompression: true,
          responsive: true,
          retina: true,
          webp: true,
          pubkey: 'ca6af56c901b93c58ffa',
          cdnBase: 'https://cdn.lugc.link'
        });
        if (window.location !== window.parent.location) {
          window.onload = function() {
            setTimeout(function() {
              window.dispatchEvent(new CustomEvent('scroll'))
            }, 500);
          };
        }
      })
    </script>
    <script src="/js/blinkloader.min.js" fetchpriority="high"></script>
    <style>
      @media (min-width: 764px) and (max-width: 959px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/x650/");
        }
      }

      @media (min-width: 960px) and (max-width: 1024px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/x650/");
        }
      }

      @media (min-width: 1025px) and (max-width: 1200px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/1200x/");
        }
      }

      @media (min-width: 1201px) and (max-width: 1500px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/1500x/");
        }
      }

      @media (min-width: 1501px) and (max-width: 1800px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/1800x/");
        }
      }

      @media (min-width: 1801px) and (max-width: 2999px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/2999x/");
        }
      }

      @media (min-width: 3000px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/-/stretch/off/-/resize/x650/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        body #DONDRz94R3NgFBdwoFobbhV4CXIo3OsM.widget-section {
          background-image: url("https://cdn.lugc.link/a1bc3233-cabe-4669-8ff2-96b5160e1b69/-/format/auto/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        body #UXTg1Cuh61oGKUg8UqM00J5TfhqKK88k {
          background-image: url("https://cdn.lugc.link/d85e4240-463b-4784-b35e-1271dd601140/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        body #UXTg1Cuh61oGKUg8UqM00J5TfhqKK88k {
          background-image: url("https://cdn.lugc.link/d85e4240-463b-4784-b35e-1271dd601140/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        body #v9zhXvhapZdJHRT3QQdz4gxPLoNiHaUT {
          background-image: url("https://cdn.lugc.link/89969ea8-cdae-4abd-8806-ad7a71405871/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        body #v9zhXvhapZdJHRT3QQdz4gxPLoNiHaUT {
          background-image: url("https://cdn.lugc.link/89969ea8-cdae-4abd-8806-ad7a71405871/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        body #IXnP6KfCpFuo26k4qsN6D7egcS7f5tdZ {
          background-image: url("https://cdn.lugc.link/e2d9f1c7-b63b-41bc-ba40-3fcb56100b4e/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        body #IXnP6KfCpFuo26k4qsN6D7egcS7f5tdZ {
          background-image: url("https://cdn.lugc.link/e2d9f1c7-b63b-41bc-ba40-3fcb56100b4e/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #XGRsX8w4pghxmpgaw3T36TJftm42hPFd:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/12c39922-3da3-449f-b93e-af2e698bac6e/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #XGRsX8w4pghxmpgaw3T36TJftm42hPFd:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/12c39922-3da3-449f-b93e-af2e698bac6e/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #m41Nndua9DFcQsOQblCatR9kR9cNFJ0G:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/332d4efb-87f7-43a0-b6f2-2cb5d730506a/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #m41Nndua9DFcQsOQblCatR9kR9cNFJ0G:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/332d4efb-87f7-43a0-b6f2-2cb5d730506a/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #LOcwmTP3TOVXd6axi2Z3HTHRWTkaqvdJ:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/68e221d6-aa9d-4076-ba5b-187c5c16e703/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #LOcwmTP3TOVXd6axi2Z3HTHRWTkaqvdJ:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/68e221d6-aa9d-4076-ba5b-187c5c16e703/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #WCPE986Kr0GEgDkSbf8bGXNlHCoonqUE:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/ce12df51-575d-4729-b5ac-391b5949ff57/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #WCPE986Kr0GEgDkSbf8bGXNlHCoonqUE:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/ce12df51-575d-4729-b5ac-391b5949ff57/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #ziiTUDpMWLDgtLF121fxAtmW5vwaU56I:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/bc6e7ff6-ad78-4bd2-8de6-db081c9aa2e9/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #ziiTUDpMWLDgtLF121fxAtmW5vwaU56I:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/bc6e7ff6-ad78-4bd2-8de6-db081c9aa2e9/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #b3oPQeGhOo3h9tBHi6h9OFhacCJFRBM0:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/89beb4c5-dac8-4f33-9030-9fdbfe720fb3/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #b3oPQeGhOo3h9tBHi6h9OFhacCJFRBM0:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/89beb4c5-dac8-4f33-9030-9fdbfe720fb3/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #rsUVvc21pDUwDfnaaxIId0O6E32VhOBx:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/3c67e28d-9baa-4d71-8188-902665d2af40/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #rsUVvc21pDUwDfnaaxIId0O6E32VhOBx:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/3c67e28d-9baa-4d71-8188-902665d2af40/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #iccf7SBWW1cTLzf0BhZP4kxmdUpDW8Ms:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/59c62b8d-44cb-4c25-bd91-e38f0fbaaa2b/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #iccf7SBWW1cTLzf0BhZP4kxmdUpDW8Ms:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/59c62b8d-44cb-4c25-bd91-e38f0fbaaa2b/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #dh5JadkT5GnSWHXOuXQFwQkATQQ4tJJk:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/b7da09b6-0514-4dc5-8e3f-aa483688aa9d/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #dh5JadkT5GnSWHXOuXQFwQkATQQ4tJJk:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/b7da09b6-0514-4dc5-8e3f-aa483688aa9d/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #mERxssGvNSWbxTpKfiT7dmU4ZshfhHpm.widget-section:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/5b063009-019d-49d1-a236-3d62849a0ef4/-/format/auto/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #mERxssGvNSWbxTpKfiT7dmU4ZshfhHpm.widget-section:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/7ca62a7b-27bb-4d08-bf62-de759091e7b4/-/format/auto/-/stretch/off/-/resize/763x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #CIFfRfg32sVp06PaF92zNl2QtJiWgUGg:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/8f3240f6-304a-46f7-93ea-159b994cc361/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #CIFfRfg32sVp06PaF92zNl2QtJiWgUGg:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/7ccca02f-5507-4211-85cc-b93a77c028c0/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #AfXnawxlqiWsbk1wJf0G5EEcnaw6mO25:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/b70cd242-f700-49e2-a9bb-f2f51186308c/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #AfXnawxlqiWsbk1wJf0G5EEcnaw6mO25:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/b70cd242-f700-49e2-a9bb-f2f51186308c/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #dSGeOJ6TLv2gwoQetWpgEFhsommRGPgi:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/0f7395c7-b40f-4b13-9fc0-de52e10d9cd0/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #dSGeOJ6TLv2gwoQetWpgEFhsommRGPgi:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/0f7395c7-b40f-4b13-9fc0-de52e10d9cd0/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #ZHLlUuMHvTetqsDUUqgOlUEnwOZBTW9i:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/8379174e-6d61-420d-abdb-6f67cbdad5be/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #ZHLlUuMHvTetqsDUUqgOlUEnwOZBTW9i:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/8379174e-6d61-420d-abdb-6f67cbdad5be/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #Tm5Me8JofpTUBSKSm43AlBqu2KUfZmTu:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/0efbaad3-3df8-418f-bc9a-dd164394ec7f/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #Tm5Me8JofpTUBSKSm43AlBqu2KUfZmTu:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/0efbaad3-3df8-418f-bc9a-dd164394ec7f/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (min-width: 764px) {
        #ykFQVFQGMHTOXspIT8W4ZLTyEEh27UHb:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/e9d6d4c4-975f-4cfb-92bc-f0e2db76015f/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <style>
      @media (max-width: 763px) {
        #ykFQVFQGMHTOXspIT8W4ZLTyEEh27UHb:not(.lazyload) {
          background-image: url("https://cdn.lugc.link/e9d6d4c4-975f-4cfb-92bc-f0e2db76015f/-/format/auto/-/stretch/off/-/resize/310x/");
        }
      }
    </style>
    <link href="/css/css" type="text/css" rel="stylesheet" as="style" fetchpriority="high" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <link href="/css/css(1)" type="text/css" rel="stylesheet" as="style" fetchpriority="high" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <link href="/css/Poppins.css" type="text/css" rel="stylesheet" as="style" fetchpriority="high" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <link href="/css/Sackers.css" type="text/css" rel="stylesheet" as="style" fetchpriority="high" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <link href="/css/030724-landend-base.css" type="text/css" rel="stylesheet" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <link href="/css/base.css" type="text/css" rel="stylesheet">
    <script>
      var landingiInternalDetails = {
        'landing_id': '1559357',
        'landing_hash': '15792f8b94cd50152930',
        'landing_variant_hash': '',
        'landing_name': 'Casamentos+Variante+B',
        'landing_lang': 'pt',
        'account_uuid': 'f5a084a4-ef56-4be9-8f96-35b346fcbd20',
        'apikey': 'a26c7d0d-c7a6-4f86-9cc2-0fff529bc360'
      }
    </script>
    <!-- Meta Pixel Code -->
    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1263631817540997');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1263631817540997&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google tag (gtag.js) -->
    <script async="" src="/js/js(6)"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'AW-948064771');
    </script>
    <!-- Meta Pixel Code -->
    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1602226210028016');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1602226210028016&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google tag (gtag.js) -->
    <script async="" src="/js/js(7)"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-B5F5SL2BZ3');
    </script>
    <script>
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.init = false;
    </script>
    <script type="text/javascript" src="/js/lazysizes.min.js"></script>
    <script>
      lazySizes.init();
    </script>
    <style></style>
    <style type="text/css">
      .hkn-arrow.svelte-yp7wdb {
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        transform-origin: center
      }

      .rotate-arrow.svelte-yp7wdb {
        transform: rotateX(180deg)
      }
    </style>
    <style type="text/css">
      .hkn-arrow.svelte-16po4pc {
        width: 8px;
        height: 8px;
        margin-right: 10px;
        cursor: pointer
      }
    </style>
    <style type="text/css">
      .hkn-arrow.svelte-16po4pc {
        width: 8px;
        height: 8px;
        margin-right: 10px;
        cursor: pointer
      }
    </style>
  </head>
  <body id="Zcc579e32ab7c2c234c287cbcbc03f3a7639f9f1">
  @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded shadow-md mt-6 fixed z-50 right-0 mr-4">
            {{ session('success') }}
        </div>
    @endif
    <div id="DONDRz94R3NgFBdwoFobbhV4CXIo3OsM" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="V8u8m9gFmJ6k2oozV56BSWFCl9pNXBi0" class="widget widget-text">
            <p>Seu sonho feito por especialistas em casamento</p>
          </div>
          <a href="#G5GiekdXogt73lpqcMVttep9TiJwgAao" id="JD4tqZKThW2PKgpTcX5glKTAynULt3kb" aria-label="solicite orçamento" class="widget widget-button" version="3" subtype="anchor" rel="noopener noreferrer">
            <div class="widget-overlay"></div>
            <div id="Re0UezFMnoZxRqVqKfKZBmRXAUmWfnEc" class="widget widget-text">solicite orçamento</div>
          </a>
          <img id="Eg25JJCoWgfKlWUDZTR1GBDdNkQrkmCK" data-original="/images/logo branca.png" class="widget widget-image " srcset="/images/logo branca.png 98w,  /images/logo branca.png 196w" sizes="(max-width: 763px) 98px,   196px" src="/images/logo branca.png" alt="Image" width="196" height="159" fetchpriority="high">
        </div>
      </div>
    </div>
    <div id="Uzq3BEGXi2nhpWnlqBC9yb5QG4tFpMQx" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="kkt3brgDKWrxTowTWIMdddM0xcrOUBZL" class="widget widget-text">
            <p>conheça nossos <span style="color: rgb(211, 128, 85);">espaços</span>
            </p>
          </div>
          <div id="CkrwbdlPaOBhPk0si7rqGsqr4ILxPhNn" class="widget widget-text">
            <p>Cada um com uma personalidade, para que você encontre um com que você se identifique e sinta-se pronto para dizer “sim”: </p>
          </div>
        </div>
      </div>
    </div>
    <div id="P55hHbLzvnx9HXXMaLZHx9VAqulAHGPe" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="UXTg1Cuh61oGKUg8UqM00J5TfhqKK88k" class="widget widget-box"></div>
          <div id="v9zhXvhapZdJHRT3QQdz4gxPLoNiHaUT" class="widget widget-box"></div>
          <div id="IXnP6KfCpFuo26k4qsN6D7egcS7f5tdZ" class="widget widget-box"></div>
        </div>
      </div>
    </div>
    <div id="pQooCL9ikC6OPccU9ANK2SJZ8NZ2UXvf" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="XGRsX8w4pghxmpgaw3T36TJftm42hPFd" class="widget widget-box lazyloaded"></div>
          <div id="m41Nndua9DFcQsOQblCatR9kR9cNFJ0G" class="widget widget-box lazyloaded"></div>
          <div id="LOcwmTP3TOVXd6axi2Z3HTHRWTkaqvdJ" class="widget widget-box lazyloaded"></div>
        </div>
      </div>
    </div>
    <div id="CV3NEZC6VBpOkRhFWShBTKhhR7oSBMTM" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="WCPE986Kr0GEgDkSbf8bGXNlHCoonqUE" class="widget widget-box lazyloaded"></div>
          <div id="ziiTUDpMWLDgtLF121fxAtmW5vwaU56I" class="widget widget-box lazyloaded"></div>
          <div id="b3oPQeGhOo3h9tBHi6h9OFhacCJFRBM0" class="widget widget-box lazyloaded"></div>
        </div>
      </div>
    </div>
    <div id="PyQHThy3J6OTBTFR4Bua9Bb8d0V14Eo0" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="rsUVvc21pDUwDfnaaxIId0O6E32VhOBx" class="widget widget-box lazyloaded"></div>
          <div id="iccf7SBWW1cTLzf0BhZP4kxmdUpDW8Ms" class="widget widget-box lazyloaded"></div>
          <div id="dh5JadkT5GnSWHXOuXQFwQkATQQ4tJJk" class="widget widget-box lazyloaded"></div>
        </div>
      </div>
    </div>
    <div id="iKaoGI0XcJu3da7GedZcw7JbedTwu8eO" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="T9N8GpCDoFMCvGoBMpG6b4zfC3k20WIT" class="widget widget-text">
            <p>nossos pilares</p>
          </div>
        </div>
      </div>
    </div>
    <div id="cOXELrhOpPh490XVTcwkgLvTGTMKKpAP" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="hzhCMClzSJ1llRCH8b7ggGRDpPHHun2F" class="widget widget-text">
            <p>feito por especialistas</p>
          </div>
          <div id="W7px6KNJPxO0O5wgdUfAOxEFUohQaAr2" class="widget widget-text">
            <p>É exclusivo. É feito por alguém e para alguém, personalizado. Quem faz é uma autoridade dentro daquele tema. Único e bem feito. Cada colaborador é um especialista. Cada marca é feita por um especialista.</p>
          </div>
          <div id="vkTiLeKoT71DW9vN10W9OGbXTRBgdUrh" class="widget widget-text">
            <p>existimos para inovar</p>
          </div>
          <div id="vOvdcSH8aFxlg0LH8EA6NZbo3rg5hXGO" class="widget widget-text">
            <p>Existimos, porque inovamos. E inovar é o que nos faz existir. Nascemos da inovação, dela se fez a nossa essência e através dela continuaremos o nosso propósito. </p>
          </div>
          <div id="dPZTpXpb1CeQB5wbcy5UnVPoFhLbhIaD" class="widget widget-text">
            <p>excelentes nos detalhes</p>
          </div>
          <div id="PROTLd4yfc6vF1wG0HfbaNgwb3lPs3Bz" class="widget widget-text">
            <p>compromisso em realizar</p>
          </div>
          <div id="zNBF1sKQC02W6entfMTavSmsMRLUtpqX" class="widget widget-text">
            <p>O detalhe é o protagonista para que o resultado final seja excelente. Isso é o que nos move. </p>
          </div>
          <div id="lmFxe20TlNwM8SVgWKME8OG8ObOxcbRe" class="widget widget-text">
            <p>Uma relação é selada por um compromisso. Há anos, somos responsáveis por tornar real aquilo que nasceu de um sonho, virou projeto e vai se tornar evento.</p>
          </div>
          <img src="/images/icon_a93211117187db664edc34f3a856f1b1bb3e0c48.svg" id="utaEr8KPfGflxM5KNbICGIbSrhxVqkqR" class="widget widget-svgicon" alt="Icon">
          <img src="/images/icon_a93211117187db664edc34f3a856f1b1bb3e0c48.svg" id="Sfw8CUgFsXrdecm8M46gZBNgK3MNxaJU" class="widget widget-svgicon" alt="Icon">
          <img src="/images/icon_a93211117187db664edc34f3a856f1b1bb3e0c48.svg" id="rrr9nKKATBCUUTJMMJWg7cOwOJFSXTS6" class="widget widget-svgicon" alt="Icon">
          <img src="/images/icon_a93211117187db664edc34f3a856f1b1bb3e0c48.svg" id="qFRlT8gF8NwvFzS8Xq3glrI6pJBSne9e" class="widget widget-svgicon" alt="Icon">
          <img id="VmFd0FaQCrHr6NRCJ4V9B1NuOt2pZyPT" data-original="https://images.assets-landingi.com/uc/6c3d9289-9158-496d-b63e-b67012969966/Feitoporespecialistas.svg" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/6c3d9289-9158-496d-b63e-b67012969966/ 50w,  https://cdn.lugc.link/6c3d9289-9158-496d-b63e-b67012969966/ 30w" data-sizes="(max-width: 763px) 50px,   30px" data-src="https://cdn.lugc.link/6c3d9289-9158-496d-b63e-b67012969966/" alt="Image" width="50" height="50" decoding="async" sizes="(max-width: 763px) 50px,   30px" srcset="https://cdn.lugc.link/6c3d9289-9158-496d-b63e-b67012969966/ 50w,  https://cdn.lugc.link/6c3d9289-9158-496d-b63e-b67012969966/ 30w" src="/images/Feito por especialistas.svg">
          <img id="ugUVO7vlB9ZR93QfsBvBECmmt3uZtXTC" data-original="https://images.assets-landingi.com/uc/9c4c72ae-a70b-4d85-a954-4cff2adbcf62/Existimosparainovar.svg" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/9c4c72ae-a70b-4d85-a954-4cff2adbcf62/ 50w,  https://cdn.lugc.link/9c4c72ae-a70b-4d85-a954-4cff2adbcf62/ 30w" data-sizes="(max-width: 763px) 50px,   30px" data-src="https://cdn.lugc.link/9c4c72ae-a70b-4d85-a954-4cff2adbcf62/" alt="Image" width="50" height="50" decoding="async" sizes="(max-width: 763px) 50px,   30px" srcset="https://cdn.lugc.link/9c4c72ae-a70b-4d85-a954-4cff2adbcf62/ 50w,  https://cdn.lugc.link/9c4c72ae-a70b-4d85-a954-4cff2adbcf62/ 30w" src="/images/Existimos para inovar.svg">
          <img id="RTazVpsxA8SxDsIJzAOV91EzZg56TmgN" data-original="https://images.assets-landingi.com/uc/5647b2c9-9f25-4bab-bd89-107feec49f7a/Excelncianosdetalhes.svg" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/5647b2c9-9f25-4bab-bd89-107feec49f7a/ 50w,  https://cdn.lugc.link/5647b2c9-9f25-4bab-bd89-107feec49f7a/ 30w" data-sizes="(max-width: 763px) 50px,   30px" data-src="https://cdn.lugc.link/5647b2c9-9f25-4bab-bd89-107feec49f7a/" alt="Image" width="50" height="50" decoding="async" sizes="(max-width: 763px) 50px,   30px" srcset="https://cdn.lugc.link/5647b2c9-9f25-4bab-bd89-107feec49f7a/ 50w,  https://cdn.lugc.link/5647b2c9-9f25-4bab-bd89-107feec49f7a/ 30w" src="/images/Excelência nos detalhes.svg">
          <img id="UynOssZTzd6W0ZOWftNlWnahwW4qa5U6" data-original="https://images.assets-landingi.com/uc/92856c62-bb94-4103-8d6d-8fbb6826e177/Compromissoemrealizar.svg" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/92856c62-bb94-4103-8d6d-8fbb6826e177/ 50w,  https://cdn.lugc.link/92856c62-bb94-4103-8d6d-8fbb6826e177/ 30w" data-sizes="(max-width: 763px) 50px,   30px" data-src="https://cdn.lugc.link/92856c62-bb94-4103-8d6d-8fbb6826e177/" alt="Image" width="50" height="50" decoding="async" sizes="(max-width: 763px) 50px,   30px" srcset="https://cdn.lugc.link/92856c62-bb94-4103-8d6d-8fbb6826e177/ 50w,  https://cdn.lugc.link/92856c62-bb94-4103-8d6d-8fbb6826e177/ 30w" src="/images/Compromisso em realizar.svg">
        </div>
      </div>
    </div>
    <div id="EWAJMECkDEQzdgPFbXrVwsXifTXVnp3s" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <a href="#G5GiekdXogt73lpqcMVttep9TiJwgAao" id="ote9EDFDQ7hWuACtEGgArVxnTPF45EvF" aria-label="solicite seu orçamento" class="widget widget-button" version="3" subtype="anchor" rel="noopener noreferrer">
            <div class="widget-overlay"></div>
            <div id="OGpa8qsUGp1lOeew1Q5PTd2eDHtzCceq" class="widget widget-text">solicite seu orçamento</div>
          </a>
        </div>
      </div>
    </div>
    <div id="mERxssGvNSWbxTpKfiT7dmU4ZshfhHpm" class="widget widget-section lazyloaded">
      <div class="row">
        <div class="container lazyloaded"></div>
      </div>
    </div>
    <div id="rlDMJRQcADaguz821iHDayqPTM2rudUW" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="CocNGtBTnyGZzaCnW4vhwlZPXK4aFMU2" class="widget widget-text">
            <p>um time que sonha com você!</p>
          </div>
          <div id="l9HraMz1ImNVykSBeqwfCu4G8rmEG4lG" class="widget widget-text">
            <p>Além do espaço, a Trip conta com especialistas em total sintonia para cuidar da decoração, gastronomia, bar, audiovisual e entretenimento para garantir eventos exclusivos do jeito que você sempre sonhou.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="EouA7soUDc56mgZGstxNkTB6l24t5yWp" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="Zy4pTl3TSge45ci7nyBxwFldSW3lE0wv" class="widget widget-text">
            <p>alta gastronomia com julio perinetto</p>
          </div>
          <div id="Mx5Uzf00uVxfNgKffL8qIA6c6l3lUUua" class="widget widget-text">
            <p>decoração floral com mariana bassi</p>
          </div>
          <img id="crvg8uaXHeiSb1PIggBs7eVF6dQp2MbL" data-original="https://images.assets-landingi.com/uc/3779a2a6-9699-4cd5-bd60-b3f291f4f891/julioperinetto.png" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/3779a2a6-9699-4cd5-bd60-b3f291f4f891/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/3779a2a6-9699-4cd5-bd60-b3f291f4f891/-/preview/150x150/-/format/auto/ 150w" data-sizes="(max-width: 763px) 150px,   150px" data-src="https://cdn.lugc.link/3779a2a6-9699-4cd5-bd60-b3f291f4f891/-/preview/150x150/-/format/auto/" alt="Image" width="150" height="150" decoding="async" sizes="(max-width: 763px) 150px,   150px" srcset="https://cdn.lugc.link/3779a2a6-9699-4cd5-bd60-b3f291f4f891/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/3779a2a6-9699-4cd5-bd60-b3f291f4f891/-/preview/150x150/-/format/auto/ 150w" src="/images/saved_resource">
          <img src="/images/icon_2435ee0d763d9b6ba15954863ebf6c7cfb64bf44.svg" id="WlIgHklBsJLSuD6nhlNgEG7z8WBhcodc" class="widget widget-svgicon" alt="Icon">
          <img id="TwJPiulm5VQCm61U5GlRwwIarcplo0Bd" data-original="https://images.assets-landingi.com/uc/c4c1b81a-daf1-48e4-87f6-679138d1a73c/marianabassi.png" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/c4c1b81a-daf1-48e4-87f6-679138d1a73c/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/c4c1b81a-daf1-48e4-87f6-679138d1a73c/-/preview/150x150/-/format/auto/ 150w" data-sizes="(max-width: 763px) 150px,   150px" data-src="https://cdn.lugc.link/c4c1b81a-daf1-48e4-87f6-679138d1a73c/-/preview/150x150/-/format/auto/" alt="Image" width="150" height="150" decoding="async" sizes="(max-width: 763px) 150px,   150px" srcset="https://cdn.lugc.link/c4c1b81a-daf1-48e4-87f6-679138d1a73c/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/c4c1b81a-daf1-48e4-87f6-679138d1a73c/-/preview/150x150/-/format/auto/ 150w" src="/images/saved_resource(1)">
          <img src="/images/icon_2435ee0d763d9b6ba15954863ebf6c7cfb64bf44.svg" id="zp5I1Rzkqwn7lk8lMWoIo9kFt3R9iJr0" class="widget widget-svgicon" alt="Icon">
          <img id="QaPFykEREZivom9gloVQcgVARD7Lk9Ic" data-original="https://images.assets-landingi.com/uc/acb70e76-bd77-4e78-ab5d-bfba80f0dced/giulianapimenta.png" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/acb70e76-bd77-4e78-ab5d-bfba80f0dced/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/acb70e76-bd77-4e78-ab5d-bfba80f0dced/-/preview/150x150/-/format/auto/ 150w" data-sizes="(max-width: 763px) 150px,   150px" data-src="https://cdn.lugc.link/acb70e76-bd77-4e78-ab5d-bfba80f0dced/-/preview/150x150/-/format/auto/" alt="Image" width="150" height="150" decoding="async" sizes="(max-width: 763px) 150px,   150px" srcset="https://cdn.lugc.link/acb70e76-bd77-4e78-ab5d-bfba80f0dced/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/acb70e76-bd77-4e78-ab5d-bfba80f0dced/-/preview/150x150/-/format/auto/ 150w" src="/images/saved_resource(2)">
          <div id="Fng57w6FhqvDo0kRyMF8OO4ZUibF8vWT" class="widget widget-text">
            <p>doces finos com giuliana pimenta</p>
          </div>
          <img src="/images/icon_2435ee0d763d9b6ba15954863ebf6c7cfb64bf44.svg" id="abWpurXD9Mgv6OC5M6pmKXfiSPXcVcRt" class="widget widget-svgicon" alt="Icon">
        </div>
      </div>
    </div>
    <div id="wfePwPVRGhVsCnu1hUCThVwrALITLuZx" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="PPaP6TZ5B7dotEpZzWHzcSrLBZEukbxJ" class="widget widget-text">
            <p>audiovisual e entretenimento com GB7</p>
          </div>
          <img src="/images/icon_2435ee0d763d9b6ba15954863ebf6c7cfb64bf44.svg" id="swP5BWRMNtxoDfOM8C5Zcgd8aeMd71z8" class="widget widget-svgicon" alt="Icon">
          <img id="xyW6nov2Kkgt17obucO7MxsHPKlsd4IX" data-original="https://images.assets-landingi.com/uc/b5404fb3-0580-4462-a62b-fbd39e877809/Artboard1.png" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/b5404fb3-0580-4462-a62b-fbd39e877809/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/b5404fb3-0580-4462-a62b-fbd39e877809/-/preview/150x150/-/format/auto/ 150w" data-sizes="(max-width: 763px) 150px,   150px" data-src="https://cdn.lugc.link/b5404fb3-0580-4462-a62b-fbd39e877809/-/preview/150x150/-/format/auto/" alt="Image" width="150" height="150" decoding="async" sizes="(max-width: 763px) 150px,   150px" srcset="https://cdn.lugc.link/b5404fb3-0580-4462-a62b-fbd39e877809/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/b5404fb3-0580-4462-a62b-fbd39e877809/-/preview/150x150/-/format/auto/ 150w" src="/images/saved_resource(3)">
          <img id="eqB0F5czWT49m2zri5pKS1MSdWG5Az75" data-original="https://images.assets-landingi.com/uc/7fc5bf3e-05ca-4d5f-9433-d3c13b7493f2/Artboard1copy.png" class="widget widget-image lazyloaded" data-srcset="https://cdn.lugc.link/7fc5bf3e-05ca-4d5f-9433-d3c13b7493f2/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/7fc5bf3e-05ca-4d5f-9433-d3c13b7493f2/-/preview/150x150/-/format/auto/ 150w" data-sizes="(max-width: 763px) 150px,   150px" data-src="https://cdn.lugc.link/7fc5bf3e-05ca-4d5f-9433-d3c13b7493f2/-/preview/150x150/-/format/auto/" alt="Image" width="150" height="150" decoding="async" sizes="(max-width: 763px) 150px,   150px" srcset="https://cdn.lugc.link/7fc5bf3e-05ca-4d5f-9433-d3c13b7493f2/-/preview/150x150/-/format/auto/ 150w,  https://cdn.lugc.link/7fc5bf3e-05ca-4d5f-9433-d3c13b7493f2/-/preview/150x150/-/format/auto/ 150w" src="/images/saved_resource(4)">
          <img src="/images/icon_2435ee0d763d9b6ba15954863ebf6c7cfb64bf44.svg" id="Eo5dkVAV4iVn0515MGslc6etWXP7X0L1" class="widget widget-svgicon" alt="Icon">
          <div id="duJ2ABTIq8d21L6aNWCHHVfVnhAAR63q" class="widget widget-text">
            <p>bar autoral com eleven bar</p>
          </div>
        </div>
      </div>
    </div>
    <div id="VoHEr1f9Ubk3f69y2i2JpQUrkUUnhnnI" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <a href="#G5GiekdXogt73lpqcMVttep9TiJwgAao" id="iLkZLVJDOd1J7T8JUQKGcftzDCrVyBqV" aria-label="fale com um consultor" class="widget widget-button" version="3" subtype="anchor" rel="noopener noreferrer">
            <div class="widget-overlay"></div>
            <div id="ZMfi50PIKX2VB0wdPixoJUOwuVJLF2z5" class="widget widget-text">fale com um consultor</div>
          </a>
        </div>
      </div>
    </div>
    <div id="nAfZiau9V5ZuT0orZrIv7fbhAwVMDB6m" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="ulc2ifLIxhhvGi1mBdhASH7iGldqZDHM" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">conheça nossos </span>
              <font color="#d38055">destinos</font>
            </p>
          </div>
          <div id="fTTMRALHTHssCou9mGZGAPTBsO2TZz3J" class="widget widget-text">
            <p>Comemore o seu grande dia em mais de um dia de festa, em um lugar paradisíaco e ao lado das pessoas mais importantes da sua vida. Conheça nossos destinos:</p>
          </div>
        </div>
      </div>
    </div>
    <div id="lEnOIcft3tFV8b7DAR8XBLIIgmy3dbrQ" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="CIFfRfg32sVp06PaF92zNl2QtJiWgUGg" class="widget widget-box lazyloaded"></div>
          <div id="AfXnawxlqiWsbk1wJf0G5EEcnaw6mO25" class="widget widget-box lazyloaded"></div>
          <div id="dSGeOJ6TLv2gwoQetWpgEFhsommRGPgi" class="widget widget-box lazyloaded"></div>
          <div id="W6t4ka0UNMOqPCBGUFkTxAoRdhOkMfNs" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">chez trip</span>
            </p>
            <p>
              <font color="#d38055">lake paradise</font>
            </p>
          </div>
          <div id="qTUISMTfzoqQy6NLa9ol9zhdmJFipeoA" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">chez trip</span>
            </p>
            <p>
              <font color="#d38055">garden</font>
            </p>
          </div>
          <div id="z6TqJzl7ubKlkgnoHAgN0f6Vb48LnBgB" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">chez trip</span>
            </p>
            <p>
              <font color="#d38055">trancoso</font>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="Kbnf1to9LQOJNBwzeLdlX26eKn9hzHHx" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="ZHLlUuMHvTetqsDUUqgOlUEnwOZBTW9i" class="widget widget-box lazyloaded"></div>
          <div id="Tm5Me8JofpTUBSKSm43AlBqu2KUfZmTu" class="widget widget-box lazyloaded"></div>
          <div id="ykFQVFQGMHTOXspIT8W4ZLTyEEh27UHb" class="widget widget-box lazyloaded"></div>
          <div id="RCIAi3aba13x1N6sk2lJR5tzAAWGiy4a" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">chez trip</span>
            </p>
            <p>
              <font color="#d38055">punta cana</font>
            </p>
          </div>
          <div id="f6ihebnP4v8w2ipL7QH1EGkmPCKwhkVN" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">chez trip</span>
            </p>
            <p>
              <font color="#d38055">rio das pedras</font>
            </p>
          </div>
          <div id="gSVKXCa8q3iPWQLN7nSvI0sZpqb4Evgv" class="widget widget-text">
            <p>
              <span style="color: rgb(26, 9, 11);">jardin trip</span>
            </p>
            <p>
              <font color="#d38055">l'occitane</font>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="G5GiekdXogt73lpqcMVttep9TiJwgAao" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="gerAvU749LvCZL2mdQzDwoWx845CygZh" class="widget widget-box"></div>
          <form id="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap" class="widget widget-form" data-orientation="vertical" data-version="2.1" action="/submit" enctype="multipart/form-data" method="post" novalidate="" data-hash="15792f8b94cd50152930">
          @csrf  
          <div id="QIPRZpFNf1C5zOJ1sFrxk36LsdJaQxIr" class="widget widget-container clearfix">
              <label id="oNUK5gALzVRZkUxis8bLnlzN4h2emMqn" class="widget widget-text widget-regular-label widget-label" for="ecN6sMMM4S4ORfhC7fbiOhbvBT6RSt0F">Nome *</label>
              <input class="widget widget-input-text" id="ecN6sMMM4S4ORfhC7fbiOhbvBT6RSt0F" type="text" subtype="name" placeholder="Nome" parentid="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap" name="nome" value="">
            </div>
            <div id="MTyufVwNwSGqcby7sEplZ8wanESxuDG2" class="widget widget-container clearfix">
              <label id="m9VCrivnlJesagTcPcxwx4q6OsPVVR5M" class="widget widget-text widget-regular-label widget-label" for="wJei9yepyQDz4HqbbL3qX4K1rTQtP1tu">Email *</label>
              <input class="widget widget-input-text" id="wJei9yepyQDz4HqbbL3qX4K1rTQtP1tu" type="email" subtype="email" parentid="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap" name="email" value="">
            </div>
            <div id="ppf3bm0d9H4IGZOknOQBm6KxcasBlS4f" class="widget widget-container clearfix">
              <label id="qSgdzGOk9OnhW9zX1AlluITtqupXpmBG" class="widget widget-text widget-regular-label widget-label" for="Uyu886S64yDr3i3cfhoGZ7BMsUiFTuia">Telefone *</label>
              <input class="widget widget-input-text" id="Uyu886S64yDr3i3cfhoGZ7BMsUiFTuia" type="tel" subtype="phone" placeholder="Telefone" parentid="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap" name="telefone" value="">
            </div>
            <div id="iSeWfPq0yiLhRu4Jfpui5oapg0eECdsg" class="widget widget-container clearfix">
              <label id="XI0OUiMVQIvsTuHVSni6iRrZtlXfN31k" class="widget widget-text widget-regular-label widget-label" for="O7GI9MSmF567sdTadh7uspdDylgbKxhB">Número de convidados *</label>
              <input class="widget widget-input-text" id="O7GI9MSmF567sdTadh7uspdDylgbKxhB" type="text" parentid="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap" name="num_convidados" value="">
            </div>
            <div id="WQwmoKN9kuRA9knQlcceeT0hKGxUgi3L" class="widget widget-container clearfix">
              <label id="f2ZpFoLg08G5qJfhci6SkIRALRq8UDkr" class="widget widget-text widget-regular-label widget-label" for="Xnv4OLdR3ef1eDVVdCCqeZomQlKFt4cx">Mensagem</label>
              <textarea class="widget widget-textarea" id="Xnv4OLdR3ef1eDVVdCCqeZomQlKFt4cx" parentid="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap" name="obs"></textarea>
            </div>
            <input type="hidden" id="nGTPgbscBcRInZUC2qJSsZv3aabtTdnf" name="utm_source" value="">
            <input type="hidden" id="lRkybusch5mS5lASAaRy3nUnAHXq3T3J" name="utm_campaign" value="">
            <input type="hidden" id="optC0kZlXaKxTgfKRffaug4JGebybEa9" name="utm_medium" value="">
            <input type="hidden" id="TW5hu6xPD2R3GETORPeZnm7LpUN9fUfZ" name="utm_content" value="">
            <input type="hidden" id="t578ZhEnhk8hGJEaWn03qnU1TMRsXo7I" name="unidade" value="LP Casamentos - JULHO 2024">
            <div id="VaS1EoMRuw29mKOyVfz5UTi0OSmkwame" class="widget widget-container input-button-container clearfix">
              <button class="widget widget-input-button" type="submit" id="WE1xLOakvHLyXoade2gna5z4zbVwFXPQ" parentid="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap">
                <div class="widget-overlay"></div>enviar
              </button>
            </div>
            <input type="hidden" name="_name_" value="">
            <input type="hidden" name="_lead_uuid" value="">
            <input type="hidden" name="_uid" value="CeEbchJ9XC2rV78anZvlHEiy0qaFuEap">
            <input type="hidden" name="_redirect" value="">
          </form>
          <div id="gV5UMV2Jl5wCp6s5TkMHyBUaAehlqIvJ" class="widget widget-text">
            <p>venha sonhar com a gente!</p>
          </div>
        </div>
      </div>
    </div>
    <div id="uqcH2Ny0qEvuXPaqW9sOLBNVXcQQR6HP" class="widget widget-section ">
      <div class="row">
        <div class="container "></div>
      </div>
    </div>
    <div id="vz1cCC5CNamQPBZhAoSNeFu5W8pbKRKO" class="widget widget-section ">
      <div class="row">
        <div class="container ">
          <div id="wC2cU8GfFw7LNwpghQeyuTrnSSd62wH5" class="widget widget-text">
            <p>CNPJ - <span style="letter-spacing: 0px;">07.030.637/0001-70</span>
            </p>
          </div>
          <div id="gGdVlK8GqhR7lvLsE45MWWVTFegzTRQA" class="widget widget-text">
            <p>Copyright © 2024 Trip - Todos os direitos reservados</p>
          </div>
          <div id="rXfx9aUlZgJZsXZsJKSxA5uT2yo9dITb" class="widget widget-box"></div>
          <img id="zUWGV9zt93cs05F3peXqUL7uclvfgtyg" data-original="/images/logo-colorida.png 149w,  /images/logo-colorida.png 166w" data-sizes="(max-width: 763px) 149px,   166px" data-src="/images/logo-colorida.png" alt="Image" width="166" height="166" decoding="async" sizes="(max-width: 763px) 149px,   166px" srcset="/images/logo-colorida.png 149w,  /images/logo-colorida.png 166w" src="/images/logo-colorida.png">
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/jquery-3-6-0.min.js" fetchpriority="high"></script>
    <script async="" type="text/javascript" src="/js/landend.bootstrap.min.js"></script>
    <script async="" type="text/javascript" src="/js/webview.1.0.2.js"></script>
    <script type="text/javascript" src="/js/landend.js"></script>
    <script defer="" type="text/javascript" src="/js/030724-anchors.js"></script>
    <script src="/js/frodo.js"></script>
    <script>
      const lpStatsModule = (function() {
        const url = "https://stats.landingi.com/visit/1559357";
        const data = {
          "lid": 1559357,
          "luuid": "c8d06e21-6401-40d7-a193-82b6f433b444",
          "lhash": "15792f8b94cd50152930",
          "fid": 1507824,
          "auuid": "f5a084a4-ef56-4be9-8f96-35b346fcbd20",
          "acid": 289834,
          "agid": 285856,
          "tid": "83560",
          "hasAccessToEventTracker": false,
          "hasAccessToEventTrackerDev": false,
          "hasAccessToEventTrackerData": false
        };
        const cookieName = "ls_sid_1507824";
        if (data.hasAccessToEventTrackerDev) {
          console.log('Running runScript in dev mode')
          frodo.runScriptDev(cookieName, url, data)
        } else {
          frodo.runScript(cookieName, url, data)
        }
        return {
          getData: function() {
            return data;
          },
          cookieName: function() {
            return cookieName;
          },
          endpoint: function() {
            return url;
          },
          path: function() {
            return path;
          }
        };
      })();
    </script>
    <script defer="" type="text/javascript" src="/js/files.js"></script>
    <script defer="" fetchpriority="low" type="text/javascript" src="/js/jquery.form.min.js"></script>
    <script type="text/javascript" src="/js/landend.min.js"></script>
    <iframe allow="join-ad-interest-group" data-tagging-id="AW-948064771" data-load-time="1722792135281" height="0" width="0" src="/js/948064771.html" style="display: none; visibility: hidden;"></iframe>
    <iframe allow="join-ad-interest-group" data-tagging-id="G-B5F5SL2BZ3" data-load-time="1722792135374" height="0" width="0" src="/js/rul.html" style="display: none; visibility: hidden;"></iframe>
    <script defer="" fetchpriority="low" type="text/javascript" src="/js/validation.js"></script>
    <meta name="adopt-website-id" content="b0959b6e-de21-4f79-80d3-4ccfd1d9594a">
    <script type="text/javascript" id="" src="/js/injector.js"></script>
    <script type="text/javascript" id="">
      ! function(d, g, e) {
        d.TiktokAnalyticsObject = e;
        var a = d[e] = d[e] || [];
        a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" ");
        a.setAndDefer = function(b, c) {
          b[c] = function() {
            b.push([c].concat(Array.prototype.slice.call(arguments, 0)))
          }
        };
        for (d = 0; d < a.methods.length; d++) a.setAndDefer(a, a.methods[d]);
        a.instance = function(b) {
          b = a._i[b] || [];
          for (var c = 0; c < a.methods.length; c++) a.setAndDefer(b, a.methods[c]);
          return b
        };
        a.load = function(b, c) {
          var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
          a._i = a._i || {};
          a._i[b] = [];
          a._i[b]._u = f;
          a._t = a._t || {};
          a._t[b] = +new Date;
          a._o = a._o || {};
          a._o[b] = c || {};
          c = document.createElement("script");
          c.type = "text/javascript";
          c.async = !0;
          c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e;
          b = document.getElementsByTagName("script")[0];
          b.parentNode.insertBefore(c, b)
        };
        a.load("C7SSHNGFLK2NRAISUDLG");
        a.page()
      }(window, document, "ttq");
    </script>
    <script type="text/javascript" id="" src="/js/optimize.js"></script>
    <script type="text/javascript" id="">
      (function(a, e, b, f, g, c, d) {
        a[b] = a[b] || function() {
          (a[b].q = a[b].q || []).push(arguments)
        };
        c = e.createElement(f);
        c.async = 1;
        c.src = "https://www.clarity.ms/tag/" + g + "?ref\x3dgtm2";
        d = e.getElementsByTagName(f)[0];
        d.parentNode.insertBefore(c, d)
      })(window, document, "clarity", "script", "lnbikkwj8c");
    </script>
    <div id="adopt-controller-button" class="adopt-c-cyPWlR" style="">
      <svg viewBox="0 0 333 333" fill="none" style="width: auto; height: auto;">
        <g filter="url(#filter0_f_17_11)">
          <path d="M166.083 294.166C236.821 294.166 294.166 236.821 294.166 166.083C294.166 95.3447 236.821 38 166.083 38C95.3447 38 38 95.3447 38 166.083C38 236.821 95.3447 294.166 166.083 294.166Z" stroke="black" stroke-opacity="0.5" stroke-width="16.576"></path>
        </g>
        <path d="M166.265 34C95.9757 34 39 93.2995 39 166.476C39 239.652 95.9757 298.952 166.265 298.952C236.555 298.952 293.53 239.652 293.53 166.476C293.53 93.2995 236.555 34 166.265 34ZM242.232 165.988L176.458 231.762C169.883 238.204 161.045 241.813 151.841 241.813C142.636 241.813 133.798 238.204 127.224 231.762L90.2895 194.84C83.8408 188.383 80.2198 179.63 80.2226 170.505C80.2255 161.379 83.8518 152.628 90.3046 146.175C96.7574 139.723 105.508 136.096 114.634 136.093C123.759 136.091 132.513 139.712 138.969 146.16L151.847 159.023L193.558 117.311C196.754 114.113 200.549 111.575 204.725 109.843C208.902 108.112 213.379 107.22 217.901 107.219C222.423 107.218 226.9 108.108 231.078 109.838C235.255 111.567 239.051 114.103 242.248 117.301C245.446 120.498 247.982 124.294 249.712 128.471C251.441 132.649 252.331 137.127 252.33 141.648C252.329 146.17 251.438 150.647 249.706 154.824C247.974 159.001 245.437 162.795 242.238 165.991L242.232 165.988Z" style="fill: rgb(183, 143, 62); stroke-width: 3.25335;"></path>
        <path d="M235.263 123.425C232.882 121.041 230.054 119.15 226.941 117.86C223.829 116.57 220.492 115.906 217.123 115.906C213.753 115.906 210.417 116.57 207.304 117.86C204.192 119.15 201.364 121.041 198.982 123.425L157.602 164.802L132.741 189.666C130.358 192.047 128.467 194.875 127.177 197.988C125.887 201.101 125.223 204.437 125.223 207.806C125.223 211.176 125.887 214.512 127.177 217.625C128.467 220.738 130.358 223.565 132.741 225.947L133.594 226.799C135.975 229.183 138.803 231.074 141.916 232.364C145.028 233.654 148.365 234.318 151.734 234.318C155.104 234.318 158.44 233.654 161.553 232.364C164.665 231.074 167.493 229.183 169.875 226.799L185.627 211.047L236.113 160.561C238.496 158.18 240.387 155.352 241.677 152.239C242.967 149.126 243.631 145.79 243.631 142.421C243.631 139.051 242.967 135.715 241.677 132.602C240.387 129.49 238.496 126.662 236.113 124.28L235.263 123.425ZM151.841 227.982C147.83 227.983 143.91 226.795 140.575 224.568C137.24 222.341 134.64 219.175 133.104 215.47C131.568 211.766 131.166 207.689 131.947 203.756C132.728 199.822 134.658 196.209 137.493 193.372C140.328 190.536 143.94 188.604 147.873 187.82C151.806 187.037 155.883 187.437 159.589 188.97C163.294 190.504 166.462 193.102 168.69 196.436C170.919 199.769 172.11 203.689 172.111 207.699C172.11 213.076 169.975 218.233 166.174 222.036C162.373 225.839 157.218 227.978 151.841 227.982Z" style="fill: rgb(183, 143, 62); stroke-width: 3.25335;"></path>
        <defs>
          <filter id="filter0_f_17_11" x="0.111313" y="0.111435" width="331.943" height="331.943" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
            <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feblend>
            <fegaussianblur stdDeviation="14.8003" result="effect1_foregroundBlur_17_11"></fegaussianblur>
          </filter>
        </defs>
      </svg>
    </div>
    <script>
      window[window.TiktokAnalyticsObject].instance("C7SSHNGFLK2NRAISUDLG").track("ViewContent", {
        "pixelMethod": "standard",
        "eb_version": "v1",
        "is_standard_mode": "1"
      });
    </script>
    <script type="text/javascript" id="">
      ! function(b, e, f, g, a, c, d) {
        b.fbq || (a = b.fbq = function() {
          a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
        }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
      }(window, document, "script", "//connect.facebook.net/en_US/fbevents.js");
      fbq("init", "1602226210028016");
      fbq("track", "PageView");
    </script>
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1602226210028016&amp;ev=PageView&amp;noscript=1">
    </noscript>
    <iframe allow="join-ad-interest-group" data-tagging-id="G-W7626WT34C" data-load-time="1722792139376" height="0" width="0" src="/js/rul(1).html" style="display: none; visibility: hidden;"></iframe>
  </body>
</html>