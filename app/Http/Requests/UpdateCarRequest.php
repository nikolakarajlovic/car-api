<?php

namespace App\Http\Requests;

use App\Models\Car;
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
            'brand' => 'string|min:2',
            'model' => 'string|min:2',
            'year' => 'integer|between:1990,2022',
            'max_speed' => 'integer|between:20,300',
            'is_automatic' => 'boolean',
            'engine' => 'string|in:' . implode(',', Car::ENGINES),
            'number_of_door' => 'integer|between:2,5',
        ];
    }
}