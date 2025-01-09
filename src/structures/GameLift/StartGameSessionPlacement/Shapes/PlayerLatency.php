<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlayerId
 * @property string $RegionIdentifier
 * @property float $LatencyInMilliseconds
 */
class PlayerLatency extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string,
     *     RegionIdentifier?: string,
     *     LatencyInMilliseconds?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
