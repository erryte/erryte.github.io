//Registering ServiceWorker if supported
if (navigator.serviceWorker) {
    navigator.serviceWorker.register('serviceWorker.js')
    // , {scope: './'} add if only using sw deeper in app
        .then(function (registration) {
        // Registration of service worker was successful
        console.log('Registration of service worker successful!');
   }).catch(function(err) {
        // Registration of service worker failed
        console.log('Registration of service worker failed with error: ', err);
        }) } else {
        console.log('Service Worker is not supported by this browser');
}
