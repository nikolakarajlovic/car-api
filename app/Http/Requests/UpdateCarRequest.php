<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand' => 'required|string|min:2|max:255',
            'model' => 'required|string|min:2|max:255',
            'year' => 'required|integer|min:1900|max:2022',
            'max_speed' => 'integer|min:20|max:300',
            'is_automatic' => 'required|boolean',
            'engine' => 'required|string|max:255',
            'number_of_doors' => 'required|integer|min:2|max:5',
        ];
    }
}
