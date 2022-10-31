<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link href="page.css" rel="stylesheet">
    <title>toets van Robben</title>
</head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <header>
        <label for="naam">vul hier uw naam in</label>
        <input type="text" name="naam" id="naam">
        <input type="submit" name="verzenden" id="verzenden" value="verzend">
    </header>
    <footer>
        <h2>kies uw kleur</h2>
        <label>
            <input type="checkbox" class="kleur" name="kleur[]" value="1" onclick="style.backgroundColor='blue'">blauw</label>
        <label>
            <input type="checkbox" class="kleur" name="kleur[]" value="2">geel</label>
        <label>
            <input type="checkbox" class="kleur" name="kleur[]" value="3">groen</label>
        <label>
            <input type="checkbox" class="kleur" name="kleur[]" value="4">rood</label>
    </footer>
</form>
</html>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = test_input($_POST["naam"]);

    echo "<h1 class='ingevuldNaam'>$naam</h1>";
}


?>
