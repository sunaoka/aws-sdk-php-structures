<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $PENDING
 * @property int<0, max>|null $ACTIVE
 * @property int<0, max>|null $IDLE
 * @property int<0, max>|null $TERMINATING
 */
class GameServerContainerGroupCounts extends Shape
{
    /**
     * @param array{
     *     PENDING?: int<0, max>|null,
     *     ACTIVE?: int<0, max>|null,
     *     IDLE?: int<0, max>|null,
     *     TERMINATING?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
