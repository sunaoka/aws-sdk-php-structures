<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_AT_ONCE'|'CANARY'|'LINEAR' $Type
 * @property int $WaitIntervalInSeconds
 * @property CapacitySize $CanarySize
 * @property CapacitySize $LinearStepSize
 */
class TrafficRoutingConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'ALL_AT_ONCE'|'CANARY'|'LINEAR',
     *     WaitIntervalInSeconds: int,
     *     CanarySize?: CapacitySize,
     *     LinearStepSize?: CapacitySize
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
