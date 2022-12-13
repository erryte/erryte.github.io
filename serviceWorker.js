var CACHE_VERSION = 'shorttask-v6';
const CACHE_FILES = [
  '/',
  'index.html',
  'css/style.css',
  'js/app.js',
  'images/flutterIcon50x50.jpg',
  'images/reactIcon100x100.jpg',
  'images/flutterReactLogo.png',
  'images/1flutter-app-twilio3.png',
  'images/1react-native-app-skype3.jpg',
  'images/2flutter-app-ebay-motors3.jpg',
  'images/2react-native-apps-instagram3.jpg',
  'images/3flutter-app-realtor3.jpg',
  'images/3react-native-apps-tesla3.jpg',
  'images/favicon.ico',
  'images/72.png',
  'images/192.png',
  'images/512.png'
]

self.addEventListener('install', event => {
    console.log('Service Worker installed');
    event.waitUntil(
        caches
        .open(CACHE_VERSION)
        .then(cache => {
            console.log('Service Worker caching files');
            cache.addAll(CACHE_FILES)
        })
        .then(() => self.skipWaiting())
    );
});

self.addEventListener('activate', event => {
    console.log('Service Worker activated');
    event.waitUntil(
        caches.keys().then(keyNames => {
            return Promise.all(
                keyNames.map(key => {
                    if(key !== CACHE_VERSION) {
                        console.log('Service Worker clearing old caches');
                        return caches.delete(key);
                    }
                })
            );
        })
    );
});

self.addEventListener('fetch', event => {
    console.log('Service Worker fetching');
    event.respondWith(
        fetch(event.request).catch(() => caches.match(event.request))
    );
});
