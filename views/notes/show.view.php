<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <h2><?= htmlspecialchars($note['body']) ?></h2>

        <a href="/note/edit?id=<?= $note['id'] ?>" class="text-sm text-red-500 mt-6">Update</a>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>