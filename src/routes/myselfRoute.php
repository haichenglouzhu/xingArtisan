<?php

Route::get('test/route', function(){
    echo '2323';
});

Route::get('show/s', '\XingArtisan\Src\ArtisanTest@show');