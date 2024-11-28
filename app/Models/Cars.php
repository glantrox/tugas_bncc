<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    function definition()
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
