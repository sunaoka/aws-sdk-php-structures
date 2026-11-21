<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateGlobalInferenceGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $KVHeadroom
 * @property float|null $QueueDepth
 * @property float|null $RegionProximity
 * @property float|null $ErrorRate
 */
class GlobalInferenceGatewayRoutingWeights extends Shape
{
    /**
     * @param array{
     *     KVHeadroom?: float|null,
     *     QueueDepth?: float|null,
     *     RegionProximity?: float|null,
     *     ErrorRate?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
