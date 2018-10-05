/**
 * Installer Service Worker
 * Lytter efter install event og tilføjer App Shell filer til cache
 */
self.addEventListener("install", function(e) {
    console.log("Service Worker Installed");
    e.waitUntil(
        caches.open('PE fetch').then(function(cache) {
            return cache.addAll([
                '/',
                '/index.php',
                '/resources/css/main.css',
                '/resources/js/app.js'
            ]);
        })
    );
});

/**
 * Aktiver Service Worker
 */
self.addEventListener("activate", function(event) {
    console.log("Service Worker Activated");
});

/**
 * Service Worker Fetch
 * Tjek cache efter match og returner hvis der er et match
 * Ellers hent fil via netværk og tilføj til cache
 */
self.addEventListener("fetch", function(event) {
    event.respondWith(
        caches.open('PE fetch').then(function(cache) {
            return cache.match(event.request).then(function(response) {
                return response || fetch(event.request).then(function(response) {
                    cache.put(event.request, response.clone());
                    return response;
                });
            });
        })
    );
});


