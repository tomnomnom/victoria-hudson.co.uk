<?php include __DIR__.'/header.php'; ?>       

<div class=gallery-container>

<?php
$images = glob(__DIR__."/images/gallery/*.jpg");
shuffle($images);

foreach ($images as $image){
    $image = basename($image);
    ?>
        <div class="gallery-image">
            <a href=/images/gallery/<?=$image?>>
                <img src=/images/gallery/thumbnails/<?=$image?>>
            </a>
        </div>
    <?php
}
?>

</div>

<?php include __DIR__.'/footer.php'; ?>       
