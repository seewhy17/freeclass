<?php

namespace App\Http\Requests;

use App\Rules\Ngmobile;
use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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
            'label' => 'bail|required|alpha_num|max:36',
            'first_name' => 'bail|required|alpha|between:3, 20',
            'last_name' => 'bail|required|alpha|between:3, 20',
            'gender' => 'bail|required|in:Female,Male',
            // 'email' => 'bail|email',
            'email' => 'bail|email:rfc,dns|unique:applicants,email',
            'phone_number' => ['bail', 'digits:11', new Ngmobile, 'unique:applicants,phone_number'],
            'stay_in_ilorin' => 'bail|required|in:No,Yes',
            'experience' => 'bail|required|string|between:30, 76',
            'channel' => 'bail|required|alpha|between:7, 9',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'stay_in_ilorin' => 'Location',
            'experience' => 'Experience level',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Your first name is required.',
            'first_name.alpha' => 'Your first name should only contain alphabets',
            'first_name.between' => 'Your first name should have between 3 to 20 characters',
            'last_name.required' => 'Your last name is required.',
            'last_name.alpha' => 'Your last name should only contain alphabets',
            'last_name.between' => 'Your last name should have between 3 to 20 characters',
            'gender.required' => 'Please select your gender.',
            'phone_number.digits' => 'Your phone number must be 11 digits.',
            // 'gender.in' => '',
            'email.email' => 'Your email must be a valid email address.',
            'stay_in_ilorin.required' => 'Your location is required.',
            // 'stay_in_ilorin.in' => '',
            'experience.required' => 'Please select your experience level',
            'experience.string' => '',
            'experience.between' => '',
            'channel.required' => 'Please select how you learnt about this training',
            'channel.alpha' => '',
            'channel.between' => '',
        ];
    }
}
