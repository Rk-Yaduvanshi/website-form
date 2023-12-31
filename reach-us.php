<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/ind-css/remixicon.css">
    <link rel="stylesheet" href="assets/ind-css/aos.css">
    <link rel="stylesheet" href="assets/ind-css/header.css">
    <link rel="stylesheet" href="assets/ind-css/footer.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/correction.css">
    <title>Contact Us</title>

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-QY919G6GY2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QY919G6GY2');
    </script> -->




    <script>
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
    </script>


    <script>
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
    </script>



    <!-- seperately loading gtag and jquery -->

    <script>
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
    </script>







    <!-- <script>
        // Function to load Google Analytics after a 5-second delay
        function loadGoogleAnalytics() {
            var script = document.createElement('script');
            script.src = 'https://www.googletagmanager.com/gtag/js?id=G-dummy-id';
            script.async = true;

            // Define a callback function for when the script loads
            script.onload = function () {
                // Initialize Google Analytics after the script is loaded
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'G-dummy-id');
            };

            // Append the script element to the document's head
            document.head.appendChild(script);
        }

        // Use setTimeout to call the function after a 5-second delay
        setTimeout(loadGoogleAnalytics, 5000); // 5000 milliseconds = 5 seconds
    </script> -->




    <!-- 
<script>
  function loadGoogleAnalytics() {
    var customScript = document.createElement('script');
    customScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-dummy-id';
    customScript.async = true;
    document.head.appendChild(customScript);

    customScript.onload = function () {
      window.customDataLayer = window.customDataLayer || [];

      function customGtag() {
        customDataLayer.push(arguments);
      }
      customGtag('js', new Date());
      customGtag('config', 'G-dummy-id');
    };
  }

  // Call the function to load Google Analytics after a 5-second delay.
  setTimeout(loadGoogleAnalytics, 5000); // 5000 milliseconds = 5 seconds
</script> -->






    <style>
        .error_field {
            color: #1c6d89;
            text-align: right;
            font-size: 13px;
            display: flex;
            justify-content: flex-end;
            /* Add other desired styles here */
        }
    </style>
</head>

<body>
    <div class="container pt-100">
        <div class="row gx-5 pb-75">

            <div class="col-xl-8 col-lg-7 col-12">
                <div class="section-title-one  mb-30">
                    <span>Contact With Us</span>
                    <h2>Any Questions</h2>
                </div>
                <form class="form-wrap" id="contact-form" name="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Name"
                                    title="Please enter text only" data-error="Please enter your name">
                                <span class="error_field" id="name_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email Address"
                                    data-error="Please enter your email">
                                <span class="error_field" id="email_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="phone" id="phone" placeholder="Phone Number"
                                    data-error="Please enter your phone">
                                <span class="error_field" id="phone_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" placeholder="Subject"
                                    data-error="Please enter your subject">
                                <span class="error_field" id="subject_error"></span>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Write Message"
                                    data-error="Please enter your message"></textarea>
                                <span class="error_field" id="msg_error"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" id="send" name="send" class="btn-one d-block w-100">Send
                                Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("send").addEventListener("click", function (event) {
                event.preventDefault();
                var form = document.getElementById("contact-form");
                var formData = new FormData(form);
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "contact-form.php", true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        document.querySelectorAll('.error_field').forEach(function (el) {
                            el.textContent = '';
                        });
                        if (response.error) {
                            document.getElementById('name_error').textContent = response.error
                                .name_error;
                            document.getElementById('email_error').textContent = response.error
                                .email_error;
                            document.getElementById('phone_error').textContent = response.error
                                .phone_error;
                            document.getElementById('subject_error').textContent = response.error
                                .subject_error;
                            document.getElementById('msg_error').textContent = response.error
                                .msg_error;
                            // Reset reCAPTCHA if used
                        }
                        if (response.mail_error) {
                            alert(response.mail_error);
                        }
                        if (response.success) {
                            // Redirect to the thank you page
                            window.location.href =
                                "thankyou.php"; // Replace with your actual thank you page URL
                        }
                    }
                };
                xhr.send(formData);
            });
        });
    </script>

</body>

</html>