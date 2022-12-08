<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
        <h2 class="font-semibold text-3xl text-center mb-12"><?= $heading ?></h2>
        <ul class=" flex flex-col justify-center items-center">
            <?php foreach($filteredBooks as $book): ?>
                <li><span class="font-semibold">Book Name: </span><?= $book['name'] ?></li>
            <?php endforeach ?>
        </ul>
        </div>
    </div>
    <!-- /End replace -->
    </div>
</main>

<?php require "partials/footer.php" ?>