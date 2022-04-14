<?
session_start();
if (!isset($_SESSION['notes'])){
    $_SESSION['notes'] = [];
}
if (isset($_POST['titre']) && isset($_POST['note'])){
    $_SESSION['notes'][] = ['titre' => $_POST['titre'], 'note' => $_POST['note']]; 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep</title>
        
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="notes-card">
                <h3 class="notes-card-title">Notes</h3>
                <?php
                    foreach ($_SESSION['notes'] as $note):
                ?>
                    <div class="notes-card-item">
                        <b><?= $note['titre'] ?></b>
                        <div><?= $note['note'] ?></div>
                    </div>
                <?php
                    endforeach
                ?>
            </div>
            <form action="" method="POST">
                <input type="text" class="input-field" name="titre" placeholder="Titre" required>
                <textarea name="note" class="input-field" rows="2" placeholder="Note" required></textarea>
                <button type="submit" class="btn">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>