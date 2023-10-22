<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:20'],
            'title' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'url' => ['url', 'nullable'],
            'gender' => ['required', 'boolean'],
            'age' => ['required'],
            'contact' => ['required', 'string', 'max:200'],
            'caution' => ['required', 'accepted']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須項目です。',
            'name.max:20' => '20文字以内で入力してください',
            'title.required' => '件名は必須項目です。',
            'title.max:50' => '50文字以内で入力してください',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email' => 'メールアドレスの形式ではありません',
            'email.max:255' => '255文字以内で入力してください',
            'url.url' => 'URLの形式ではありません',
            'gender.required' => '性別は必須項目です',
            'age.required' => '年齢は必須項目です',
            'contact.required' => 'お問い合わせ内容は必須項目です',
            'caution.required' => 'こちらは必須項目です',
            'caution.accepted' => '同意をお願いします'
        ];
    }
}
