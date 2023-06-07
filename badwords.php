<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>PHP Bad Words</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body class="bg-dark text-light">
    <div class="container">
        <h1 class="text-center my-5">BAD WORDS</h1>

        <?php 
            $p = $_GET["paragraph"];
        ?>

        <h2>Original paragraph(len: <?php echo strlen($p) ?>):</h2>
        <p class="fs-4">
            <?php echo $p ?>
        </p>

        <?php 
            $p = str_replace($_GET["badword"], "***", $p);
        ?>

        <h2>Censured paragraph(len: <?php echo strlen($p) ?>):</h2>
        <p class="fs-4">
            <?php echo $p ?>
        </p>
    </div>

</body>

</html>