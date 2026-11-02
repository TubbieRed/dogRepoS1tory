<?php
if (!empty($_POST[txt])) {
    file_put_contents(datos.txt, $_POST[txt] . PHP_EOL, FILE_APPEND);
    $guardado = true;
} else {
    $guardado = false;
}
?>

<?php if ($guardado): ?>
    <p>Enter: <?= htmlspecialchars($_POST[txt]) ?></p>
<?php else: ?>
    <form method="post">
        <input name="txt" type="text" placeholder="Take this">
        <input type="submit" value="Send">
    </form>
<?php endif; ?>


