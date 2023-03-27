<?php

namespace App\Http\Requests;

use App\Models\Comic;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class ComicFiltersRequest extends FormRequest
{
    use Concerns\CastsScalarInputToArrays;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->castScalarsToArrays(
            $this->getKeysWithArrayRule($this->rules()),
        );
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return Comic::getFiltersRules();
    }
}
