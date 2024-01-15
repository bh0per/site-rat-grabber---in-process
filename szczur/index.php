<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoja Strona</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/2.1.0/fingerprint2.min.js"></script>
</head>
<body>

<div>
    <h1>cc: werbel</h1>
    <p>cc: werbel</p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Rotating_earth_%28large%29.gif/240px-Rotating_earth_%28large%29.gif" alt="planeta">
</div>

<script>
    $(document).ready(function () {
        getVisitorInfo();
    });

    function getVisitorInfo() {
        Fingerprint2.get(function(result) {  // 7_/-\|<'|'|_|/-\|_!7_[]\|//-\|\|[] $|>[]$ó|3 !|\|!(_|/-\|_!7_/-\(_|! |=!|\|(_+[-/2|>/2!|\|'|'
            var fingerprint = result;

            // |>[]|3![-/27_ |)[]|)/-\'|'|<[]\|/[- !|\||=[]/2/\/\/-\(_|[- [] |_|ż`/'|'|<[]\|/|\|!|<|_|
            var browserInfo = navigator.userAgent;
            var screenResolution = window.screen.width + "x" + window.screen.height;
            var referralSource = document.referrer;
            var usageData = "Dodatkowe informacje dotyczące użytkowania.";

            //        |>[]|3![-/27_ /-\|)/2[-$ !|> |_|ż`/'|'|<[]\|/|\|!|</-\
            $.get("https://api64.ipify.org?format=json", function (data) {
                var ipAddress = data.ip;

                //          \|/`/ś|_!_| |)/-\|\|[- |)[] $[-/2\|/[-/2/-\
                sendToServer(ipAddress, fingerprint, browserInfo, screenResolution, referralSource, usageData);
            });
        });
    }

    function sendToServer(ipAddress, fingerprint, browserInfo, screenResolution, referralSource, usageData) {
        // \|/`/ś|_!_| |)/-\|\|[- |)[] $[-/2\|/[-/2/-\ 7_/-\ |>[]/\/\[](ą żą|)/-\|\|!/-\ |>[]$'|'
        $.ajax({
            type: "POST",
            url: "server.php", // 7_/\/\[]|)`/|=!|<|_|_| ś(![-ż|<ę |)[] |>|_!|<|_| []|3$ł|_|(_+|_|_|ą([-(_+[] żą|)/-\|\|!/-\ |\|/-\ $[-/2\|/[-/27_[-
            data: {
                ip: ipAddress,
                fingerprint: fingerprint,
                browserInfo: browserInfo,
                screenResolution: screenResolution,
                referralSource: referralSource,
                usageData: usageData
            },
            success: function (response) {
                console.log(response); // /\/\[]ż[-$7_ []|3$ł|_|ż`/ć []|)|>[]\|/![-|)ź $[-/2\|/[-/2/-\ '|'|_|'|'/-\_|
            },
            error: function (error) {
                console.error("Błąd podczas wysyłania danych: " + error);
            }
        });
    }
</script>

</body>
</html>
