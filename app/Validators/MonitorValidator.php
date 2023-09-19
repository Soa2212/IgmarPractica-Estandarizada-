<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class MonitorValidator
{
    public static function validate(array $data)
    {
        return Validator::make($data, [
            "Tasa_de_refresco" => "required|numeric|min:60",
            "Pulgadas" => "required|numeric|min:19",
            "Precio" => "required|numeric|min:2",
            "Stock" => "required|numeric|min:1|max:999"
        ]);
    }
}