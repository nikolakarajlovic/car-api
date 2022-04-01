<?php

namespace App\Http\Requests;

use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'brand' => 'required|string|min:2',
            'model' => 'required|string|min:2',
            'year' => 'required|integer|between:1990,2022',
            'max_speed' => 'integer|between:20,300',
            'is_automatic' => 'required|boolean',
            'engine' => 'required|string|in:' . implode(',', Car::ENGINES),
            'number_of_door' => 'required|integer|between:2,5',
        ];
    }
}