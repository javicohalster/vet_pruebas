<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAddPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function rules()
    {
         return [
            'rut_add'       => 'required',
           // 'rut_add'       => 'required|unique:users,rut',
            'nombres_add'   => 'required|string',
            'apellidos_add' => 'required|string',
            'nacimiento_add'=> 'required',
            'email_add'     => 'required|email',
            //'email_add'     => 'required|email|unique:users,email',
            'telefono_add'  => 'required',
            'direccion_add' => 'required|min:5',
            'genero_add'    => 'required',
              
        ];
    }
    public function messages()
    {
        return [
            'rut_add.required' => 'El campo rut es obligatorio.',
            //'rut_add.unique' => 'El campo rut pertenece a otro paciente.',
            'nombres_add.required' => 'El campo nombres es obligatorio.',
            'nombres_add.string' => 'El campo nombres solo debe contener letras.',
            'apellidos_add.required' => 'El campo apellidos es obligatorio.',
            'apellidos_add.string' => 'El campo apellidos solo debe contener letras.',
            'nacimiento_e.required' => 'El campo fecha de nacimiento es obligatorio.',
            'email_add.required' => 'El campo email es obligatorio.',
            'email_add.email' => 'El campo email debe tener un formato válido.',
           // 'email_add.unique' => 'El email ingresado pertenece a otro paciente.',
            'telefono_add.required' => 'El campo telefono es obligatorio.',
            'direccion_add.required' => 'El campo dirección es obligatorio.',
            'genero_add.required' => 'El campo género es obligatorio.',
           
        ];
    }
}
