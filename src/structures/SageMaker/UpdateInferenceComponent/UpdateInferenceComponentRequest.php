<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 * @property Shapes\InferenceComponentSpecification $Specification
 * @property Shapes\InferenceComponentRuntimeConfig $RuntimeConfig
 */
class UpdateInferenceComponentRequest extends Request
{
    /**
     * @param array{
     *     InferenceComponentName: string,
     *     Specification?: Shapes\InferenceComponentSpecification,
     *     RuntimeConfig?: Shapes\InferenceComponentRuntimeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
