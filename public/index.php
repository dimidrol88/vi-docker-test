<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../src/autoloader.php');

$ip = $_SERVER['REMOTE_ADDR'] ?: '0.0.0.0';
$log = new \core\entities\Log();

$log->add($ip);

$logs = $log->getAll();
?>

<html lang="ru">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vi-docker test</title>
<body>
<table border="1">
    <caption>Таблица посещений</caption>
    <thead style="background: #fc0">
    <tr>
        <td>Ip</td>
        <td>Дата</td>
    </tr>
    </thead>
    <tbody style="background: #ccc">
    <?php foreach ($logs as $log) :?>
        <tr>
            <td><?= $log['ip']?></td>
            <td><?= $log['created_at']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
</body>

</html>
