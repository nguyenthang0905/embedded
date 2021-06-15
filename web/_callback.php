<!DOCTYPE html>
<html>
<head>
    <meta name="salesforce-community" content="https://devsb-ditest001b2bcommercelex.cs73.force.com/b2bcomlex">
    <meta name="salesforce-allowed-domains" content="embedded-login1.herokuapp.com">
    <meta name="salesforce-mode" content="inline-callback">
    <meta name="salesforce-save-access-token" content="true">
    <meta name="salesforce-logout-on-browser-close" content="true">

    <script src="https://devsb-ditest001b2bcommercelex.cs73.force.com/b2bcomlex/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>

    <script>
        function onlogin(identity) {
            console.log('CALLBACK');
            console.log(identity);
        }
        function onLogout() {
            console.log('LOGOUT');
            SFIDWidget.init();
        }
    </script>
</head>
<body>
    
</body>
</html>
