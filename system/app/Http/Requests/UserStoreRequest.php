<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'nama' => 'required|unique:user,nama',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            'no_handphone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Wajib Diisi',
            'username.required' => 'Username Wajib Diisi',
            'username.unique' => 'Username sudah terpakai',
            'nama.unique' => 'Nama sudah terpakai',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email tidak valid',
            'jenis_kelamin.required' => 'Jenis kelamin Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
            'no_handphone.required' => 'No Hp Wajib Diisi',

        ];
    }
}