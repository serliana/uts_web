<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JurusanPopulerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'Namajurusan' => 'required',
            'Deskripsijurusan' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'Namajurusan.required' => 'Nama jurusan tidak boleh kosong',
            'Deskripsijurusan.required' => 'Deskripsi tidak boleh kosong',
        ];
    }
}
