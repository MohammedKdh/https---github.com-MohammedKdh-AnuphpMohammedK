<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'Catname' =>['required'],
            'CatDesc' =>['required']
        ];
    }

    public function message(){
        return[
            'Catname.required'=>"The category name is required",
            'CatDesc.required'=>"The category decsription is required",
        ];


    }
}
