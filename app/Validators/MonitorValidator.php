<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class MonitorValidator
{
    public static function validate(array $data)
    {
        return Validator::make($data, [
            "Tasa_de_refresco" => "required|min:2|max:4",
            "Pulgadas" => "required|min:2|max:3",
            "Precio" => "required|min:2|max:20",
            "Stock" => "required|min:2|max:20"
        ]);
    }
}
