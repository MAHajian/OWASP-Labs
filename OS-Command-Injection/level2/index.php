<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OS Command Injection</title>
</head>
<body>
    <form method="get">
        IP: <input type="text" name="ip">
        <input type="submit" value="Ping" name="ping" id="ping">
        <h3 id="result"><?php ping()?></h3>
    </form>
</body>
</html>
<?php
    function ping() {
        if (isset($_GET['ping'])) {
            $ip = $_GET['ip'];
            $stdout = 0;
	        exec("ping -c 1 $ip", $output);
            if (strstr($output[4], '0% packet loss')) exit ('Resolved');
            exit ('Timeout');
        }
    }
?>
