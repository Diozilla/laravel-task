<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StoreUserRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'image' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A name is required please insert it ',
            'email.required' => 'A message is required plese inert it ',
            'image.required' => 'An image is required plese upload it ',

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'username',
            'email' => 'email address',
            'image' => 'image',
        ];
    }
}
