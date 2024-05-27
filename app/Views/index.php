<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/main.css">
    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <?php foreach ($users as $u) : ?>
        <h1><?php echo $u->firstname . ' ' . $u->lastname; ?></h1>
    <?php endforeach; ?>
</body>

</html>