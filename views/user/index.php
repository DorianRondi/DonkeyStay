<div class="row">
    <h4>Utilisateurs enregistrés</h4>
    <?php foreach ($users as $key => $value) : ?>
        <article>
            <h5>
                <a href="user/userProfil/<?= $value->userID; ?>">
                    <?= $value->userFirst . " " . $value->userLast; ?>
                </a>
            </h5>
        </article>
    <?php endforeach; ?>
</div>