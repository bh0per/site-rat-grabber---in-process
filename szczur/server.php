<?php
// |>[]łą(7_[-|\|![- 7_ |3/-\7_ą |)/-\|\|`/(#
$servername = "localhost";  // '|'\|/ó_| /-\|)/2[-$ $[-/2\|/[-/2/-\ /\/\`/$(_,)|_
$username = "root";         // '|'\|/ó_| |_|ż`/'|'|<[]\|/|\|!|< /\/\`/$(_,)|_
$password = "";             // '|'\|/[]_|[- #/-\$ł[] /\/\`/$(_,)|_
$dbname = "nazwa_bazy_danych";  // |\|/-\7_\|//-\ '|'\|/[]_|[-_| |3/-\7_`/ |)/-\|\|`/(#

$conn = new mysqli($servername, $username, $password, $dbname);

// $|>/2/-\\|/|)ź |>[]łą(7_[-|\|![-
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// []|)|3![-/27_ |)/-\|\|[- |>/27_[-$ł/-\|\|[- 7_ |<|_![-|\|'|'/-\
$ipAddress = $_POST['ip'];
$fingerprint = $_POST['fingerprint'];
$browserInfo = $_POST['browserInfo'];
$screenResolution = $_POST['screenResolution'];
$referralSource = $_POST['referralSource'];
$usageData = $_POST['usageData'];

// \|/$'|'/-\\|/ |)/-\|\|[- |)[] |3/-\7_`/ |)/-\|\|`/(#
$sql = "INSERT INTO visitors_log (ip_address, fingerprint, browser_info, screen_resolution, referral_source, usage_data)
        VALUES ('$ipAddress', '$fingerprint', '$browserInfo', '$screenResolution', '$referralSource', '$usageData')";

if ($conn->query($sql) === TRUE) {
    echo "Dane odebrane i zapisane pomyślnie!";
} else {
    echo "Błąd podczas zapisywania danych: " . $conn->error;
}

// 7_/-\/\/\|<|\|!_| |>[]łą(7_[-|\|![-
$conn->close();
?>
