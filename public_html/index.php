<!DOCTYPE html>
<html lang="en">

<head>

    <title>Python Coding Space</title>

    <!-- Code mirror assets -->
    <script src="assets/lib/codemirror.js"></script>
    <link rel="stylesheet" href="assets/lib/codemirror.css">
    <script src="assets/mode/python/python.js"></script>

    <style>
        .CodeMirror{
            height: 97vh;
        }
    </style>

</head>

<body>

<?php
$page = "index-page";
$hasGmap = true;
?>

</body>

<script>
    CodeMirror(document.body, {
        mode:  "python",
        lineNumbers: true
    });
</script>

</html>
