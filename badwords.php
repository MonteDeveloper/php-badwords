<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>PHP Bad Words</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
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

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
</body>

</html>