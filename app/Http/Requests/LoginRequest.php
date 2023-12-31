<?php

namespace App\Http\Requests;

use App\Rules\VerifyTelNumberRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string|null $firebase_token
 * @property string|null $phone_number
 */
class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "firebase_token" => ["required", new VerifyTelNumberRule(true)],
            "phone_number" => ["sometimes", new VerifyTelNumberRule()],
        ];
    }
}
