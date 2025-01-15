<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlayerId
 * @property string|null $RegionIdentifier
 * @property float|null $LatencyInMilliseconds
 */
class PlayerLatency extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string|null,
     *     RegionIdentifier?: string|null,
     *     LatencyInMilliseconds?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
