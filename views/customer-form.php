<section class="box">
    <h2><?= $formTitle ?></h2>
    <form action="<?= $action ?>" method="post">
        <p>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="<?= $old["name"] ?? '' ?>">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $old["email"] ?? '' ?>">
        </p>
        <p>
            <label for="address">Dirección postal:</label>
            <input type="text" id="address" name="address" value="<?= $old["address"] ?? '' ?>">
        </p>
        <button><?= $label ?></button>
    </form>
</section>