<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Items{
    public static function find($inputVar){
        $targetItemPath=resource_path("sths/{$inputVar}.html");
        if(! file_exists($targetItemPath))
        {
            throw new ModelNotFoundException();
        }
        //shorthand version
        return cache()->remember('sumting.{target}',now()->addHours(1),fn() =>file_get_contents($targetItemPath));
    }
}