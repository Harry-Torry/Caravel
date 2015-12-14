<?php

namespace ThisVessel\Caravel\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use ThisVessel\Caravel\Traits\SetsResource;

class ResourceRequest extends FormRequest
{
    use SetsResource;

    /**
     * Resource helper object.
     *
     * @var \ThisVessel\Caravel\Resource
     */
    protected $resource;

    /**
     * Create a new resource request instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setResource();
    }

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
        return $this->resource->rules;
    }
}