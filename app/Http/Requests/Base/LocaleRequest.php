<?php

namespace Convoy\Http\Requests\Base;

use Illuminate\Foundation\Http\FormRequest;

class LocaleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'locale' => ['required', 'string', 'regex:/^[a-zA-Z_]{2,10}(\s[a-zA-Z_]{2,10})*$/'],
            'namespace' => ['required', 'string', 'regex:/^(?!.*\.\.)[A-Za-z_. ]{1,191}$/'],
        ];
    }
}