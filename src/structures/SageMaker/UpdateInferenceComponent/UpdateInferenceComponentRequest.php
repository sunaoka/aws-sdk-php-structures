<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 * @property Shapes\InferenceComponentSpecification|null $Specification
 * @property Shapes\InferenceComponentRuntimeConfig|null $RuntimeConfig
 */
class UpdateInferenceComponentRequest extends Request
{
    /**
     * @param array{
     *     InferenceComponentName: string,
     *     Specification?: Shapes\InferenceComponentSpecification|null,
     *     RuntimeConfig?: Shapes\InferenceComponentRuntimeConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
