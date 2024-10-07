<?php
require_once(__DIR__ . '/../partials/head.php');
?>
<h1>Voir une tâche</h1>
<form method='POST'>
    <div class="col-md-4 mx-auto d-block mt-5">
        <div class="mb-3">
            <label for="title">Nom de la tâche</label>
            <input type="text" name='title'>
            <?php if (isset($this->arrayError['title'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['title'] ?></p>
            <?php
            } ?>
        </div>
 


<?php
require_once(__DIR__ . '/../partials/footer.php');
?>