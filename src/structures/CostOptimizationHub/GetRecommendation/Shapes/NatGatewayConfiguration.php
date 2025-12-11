<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $activeConnectionCount
 * @property int|null $packetsInFromSource
 * @property int|null $packetsInFromDestination
 */
class NatGatewayConfiguration extends Shape
{
    /**
     * @param array{
     *     activeConnectionCount?: int|null,
     *     packetsInFromSource?: int|null,
     *     packetsInFromDestination?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
