<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer',
            ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Это поле необходимо заполнить',
            'email.string' => 'Почта должно быть строкой',
            'email.email' => 'Ваша почта должна соотвествовать формату some@mail.com',
            'email.unique' => 'Пользователь с таким emeil уже существует',


        ];
    }
}
