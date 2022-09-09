<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;

class UserCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return $this->createRule();
    }

    public function createRule()
    {
        return [
            'id'                => 'required|numeric|exists:App\Models\User,id',
            'comment'           => 'required',
            'password'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            "id.required"           => "Missing key/value for id.",
            "comment.required"      => "Missing key/value for comment.",
            "password.required"     => "Missing key/value for password."
        ];
    }
}
