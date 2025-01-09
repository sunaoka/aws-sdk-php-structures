<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EnableExplanations
 * @property ClarifyInferenceConfig $InferenceConfig
 * @property ClarifyShapConfig $ShapConfig
 */
class ClarifyExplainerConfig extends Shape
{
    /**
     * @param array{
     *     EnableExplanations?: string,
     *     InferenceConfig?: ClarifyInferenceConfig,
     *     ShapConfig: ClarifyShapConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
