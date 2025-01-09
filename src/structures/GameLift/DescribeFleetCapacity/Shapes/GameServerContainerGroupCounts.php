<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PENDING
 * @property int $ACTIVE
 * @property int $IDLE
 * @property int $TERMINATING
 */
class GameServerContainerGroupCounts extends Shape
{
    /**
     * @param array{
     *     PENDING?: int,
     *     ACTIVE?: int,
     *     IDLE?: int,
     *     TERMINATING?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
