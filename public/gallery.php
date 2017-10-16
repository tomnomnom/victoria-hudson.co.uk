<?php include __DIR__.'/header.php'; ?>       

<?php
$images = glob(__DIR__."/images/gallery/*.jpg");
shuffle($images);

foreach ($images as $image){
    $image = basename($image);
    ?>
        <div class="gallery-container">
            <a href=/images/gallery/<?=$image?>>
                <img src=/images/gallery/thumbnails/<?=$image?>>
            </a>
        </div>
    <?php
}
?>

<?php include __DIR__.'/footer.php'; ?>       
