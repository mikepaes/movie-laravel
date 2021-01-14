<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;

    public function getResumeAttribute(){
        return Str::limit($this->sinopse, 80, '...');
    }

    public function getShowStarsAttribute(){
        $stars = str_replace("'", "\"", $this->stars);
        $stars = substr_replace($stars, "[", 0, 1);
        $stars = substr_replace($stars, "]", -1);
        try{
            $stars = array_map(
                function($star) { return $star->name; },
                json_decode($stars)
            );
            return implode(", ", $stars);
        }catch (\ErrorException $e){
            return $e;
        }
    }
}
