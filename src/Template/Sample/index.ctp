<body background=<?= $bg_path ?>.".jpg">
    <div>
        <img src="/img/icon.png">
    </div>
    <p>
        <?php foreach ($bg_path as $bg): ?>
            echo $bg->id . $bg->tex_url
        <?php endforeach; ?>
    </p>
</body>