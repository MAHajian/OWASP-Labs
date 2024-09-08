<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OS Command Injection</title>
</head>
<body>
    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="get">
        IP: <input type="text" name="ip" style="margin-bottom: 4;">
        <input type="submit" value="Ping" name="ping" id="ping"></br>
        <span id="result"><?php ping()?></span>
    </form>
</body>
</html>
<?php
    function ping() {
        if (isset($_GET['ping'])) {
            $ip = $_GET['ip'];
            exec("ping -c 1 $ip", $output);
            foreach ($output as $line) echo $line.'</br>';
        }
    }
?>
