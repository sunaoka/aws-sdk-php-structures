<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponentRuntimeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 * @property Shapes\InferenceComponentRuntimeConfig $DesiredRuntimeConfig
 */
class UpdateInferenceComponentRuntimeConfigRequest extends Request
{
    /**
     * @param array{
     *     InferenceComponentName: string,
     *     DesiredRuntimeConfig: Shapes\InferenceComponentRuntimeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
