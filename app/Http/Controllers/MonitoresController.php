<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitor;
use Illuminate\Support\Facades\Validator;
use App\Validators\MonitorValidator;




class MonitoresController extends Controller
{
    public function store(Request $request, int $numero = 1)
    {

        $validate = MonitorValidator::validate($request->all());

        if ($validate->fails()) {
            return response()->json([
                'msg' => 'Error de validación de datos',
                'errors' => $validate->errors()
            ], 422);
        }

        $monitor = new Monitor();
        $monitor->Tasa_de_refresco = $request->Tasa_de_refresco;
        $monitor->Pulgadas = $request->Pulgadas;
        $monitor->Precio = $request->Precio;
        $monitor->Stock = $request->Stock;
        $monitor->save();


        return response()->json([["msg" => "Hola tu monitor sido registrado con exito", "data" => $monitor, "estado" => 201]]);
    }

    public function index()
    {
        return response()->json([
            "msg" => "Datos encontrados",
            "Data" => Monitor::all()
        ], 200);
    }

    public function update(Request $request, int $id)
    {

        $validate = MonitorValidator::validate($request->all());
        
        if ($validate->fails()) {
            return response()->json([
                'msg' => 'Error de validación de datos',
                'errors' => $validate->errors()
            ], 422);
        }
        
        $monitor = Monitor::find($id);

        if ($monitor) {

            $monitor->Tasa_de_refresco = $request->Tasa_de_refresco;
            $monitor->Pulgadas = $request->Pulgadas;
            $monitor->Precio = $request->Precio;
            $monitor->Stock = $request->Stock;
            $monitor->save();

            return response()->json([["msg" => "Hola tu monitor sido actualizado con exito", "data" => $monitor, "estado" => 201]]);


        }
        return response()->json(["msg" => "monitor no fue encontrado"], 404);

    }

    public function destroy(int $id)
    {
        $monitores = Monitor::find($id);

        if ($monitores) {
            $monitores->delete();
            return response()->json([["msg" => "Hola tu monitor sido eliminado con exito", "estado" => 200]]);
        }
        return response()->json(["msg" => "monitor no fue encontrado"], 404);

    }

}