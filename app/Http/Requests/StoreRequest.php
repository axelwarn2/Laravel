<?php

namespace App\Http\Requests;

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

    public function messages(){
        return [
            'surname.required' => 'Поле не может быть пустым, от 3-х до 25-ти знаков',
            'receipt.required' => 'Выберите дату поступления',
            'supplement.required' => 'Поле не может быть пустым, только числовое положительное значение',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'surname' => 'required|min:3|max:25',
            'departament' => 'required',
            'job' => 'required',
            'receipt' => 'required',
            'supplement' => "required|regex:/^[1-9]\d*$/",
        ];
    }
}
