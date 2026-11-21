<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateGlobalInferenceGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlobalInferenceGatewayRoutingWeights $Weights
 */
class GlobalInferenceGatewayRouting extends Shape
{
    /**
     * @param array{Weights: GlobalInferenceGatewayRoutingWeights} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
