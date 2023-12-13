<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:500',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Adjust the mime types and max file size as needed
        ];
    }
    public function messages(){
        return[
            "name.required|string|min:3|max:255"=>"please enter your name",
            "description.required|string|min:3|max:500"=>"enter the description",
            "price.required|numeric|min:0"=>"please enter the price",
            "image.image|mimes:jpeg,png,jpg|max:2048"=>"enter valid image"
        ];
    }
}
