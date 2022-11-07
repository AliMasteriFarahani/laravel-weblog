<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'roles'=>'required',
            'status'=>'required',
            'password'=>'required|min:6',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'نام کاربر الزامی است',
            'email.required'=>'ایمیل کاربر الزامی است',
            'email.email'=>'ایمیل کاربر صحیح نیست است',
            'roles.required'=>'نقش کاربر الزامی است',
            'status.required'=>'وضعیت کاربر الزامی است',
            'password.required'=>'رمز عبور کاربر الزامی است',
            'password.min'=>'طول رمز عبور کوتاه است',
        ];
    }
}
