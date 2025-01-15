<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_AT_ONCE'|'CANARY'|'LINEAR' $Type
 * @property int<0, 3600> $WaitIntervalInSeconds
 * @property CapacitySize|null $CanarySize
 * @property CapacitySize|null $LinearStepSize
 */
class TrafficRoutingConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'ALL_AT_ONCE'|'CANARY'|'LINEAR',
     *     WaitIntervalInSeconds: int<0, 3600>,
     *     CanarySize?: CapacitySize|null,
     *     LinearStepSize?: CapacitySize|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
