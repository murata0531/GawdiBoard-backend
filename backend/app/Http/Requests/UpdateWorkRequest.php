<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        # TODO: ユーザー認証が出来次第ロジックを記入
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
            'work_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'max:50'],
            'short_description' => ['present', 'string', 'max:255'],
            'note' => ['present', 'string', 'max:255'],
            'picture' => ['present', 'url', 'max:255'],
            'link' => ['present', 'string', 'max:300'],
            'work_tag_ids' => ['required', 'array'],
            'work_tag_ids.*' => ['integer', 'min:1'],
        ];
    }
}
