<html>
<head>
    <title>Hello world</title>
</head>
<body>
<h1>Hello world</h1>
<p>The time is currently <time datetime="<?= date(DATE_ATOM); ?>"><?= date('Y-m-d H:i:s') ?></time>.</p>
<p><?= mt_rand(0, PHP_INT_MAX); ?></p>
<time></time>
</body>
</html>
