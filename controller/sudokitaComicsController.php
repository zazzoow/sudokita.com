<?php

namespace App;

$post = format(sanitize($_POST));

$img = New Post();

$image = $img->getImage($post);
$text = $img->getDescribe($post);

require 'views/comics.views.php';
