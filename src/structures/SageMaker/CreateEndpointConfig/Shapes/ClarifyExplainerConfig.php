<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EnableExplanations
 * @property ClarifyInferenceConfig|null $InferenceConfig
 * @property ClarifyShapConfig $ShapConfig
 */
class ClarifyExplainerConfig extends Shape
{
    /**
     * @param array{
     *     EnableExplanations?: string|null,
     *     InferenceConfig?: ClarifyInferenceConfig|null,
     *     ShapConfig: ClarifyShapConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
