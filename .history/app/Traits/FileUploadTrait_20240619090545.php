<?php

namespace App\Traits;

use Request;

trait FileUploadTrait {
    function updateImage(Request $request, $inputName, $path = "/uploads") {
        if($request->hasFile($inputName)) {

            $image = $request->{$inputName};
        }




    }
}
