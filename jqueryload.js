

function loadGoogleAnalytics() {
    var script = document.createElement('script');
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-QY919G6GY2';
    script.async = true;
    document.head.appendChild(script);

    script.onload = function () {
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QY919G6GY2');
    };
}

// Call the function to load Google Analytics after a 5-second delay.
setTimeout(loadGoogleAnalytics, 5000); // 5000 milliseconds = 5 seconds
























function loadScripts() {
    // Function to load Google Analytics
    function loadGoogleAnalytics() {
        var gaScript = document.createElement('script');
        gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-dummy-id';
        gaScript.async = true;

        gaScript.onload = function () {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-dummy-id');
        };

        document.head.appendChild(gaScript);
    }

    // Function to load jQuery
    function loadJQuery() {
        var jqueryScript = document.createElement('script');
        jqueryScript.src = 'assets/js/jquery-3.6.3.min.js';
        jqueryScript.async = true;

        document.head.appendChild(jqueryScript);
    }

    // Use setTimeout to call both functions after a 5-second delay
    setTimeout(loadGoogleAnalytics, 5000);
    setTimeout(loadJQuery, 5000);
}

// Call the function to load both scripts
loadScripts();


















// <!-- seperately loading gtag and jquery -->

// Function to load Google Analytics
function loadGoogleAnalytics() {
    var gaScript = document.createElement('script');
    gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-dummy-id';
    gaScript.async = true;

    gaScript.onload = function () {
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-dummy-id');
    };

    document.head.appendChild(gaScript);
}

// Function to load jQuery
function loadJQuery() {
    var jqueryScript = document.createElement('script');
    jqueryScript.src = 'assets/js/jquery-3.6.3.min.js';
    jqueryScript.async = true;

    document.head.appendChild(jqueryScript);
}

// Use setTimeout to load Google Analytics after a 5-second delay
setTimeout(loadGoogleAnalytics, 5000);

// Use another setTimeout to load jQuery after a 10-second delay
setTimeout(loadJQuery, 10000);


