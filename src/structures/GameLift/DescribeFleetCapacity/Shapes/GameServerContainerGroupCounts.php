<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $PENDING
 * @property int<0, max> $ACTIVE
 * @property int<0, max> $IDLE
 * @property int<0, max> $TERMINATING
 */
class GameServerContainerGroupCounts extends Shape
{
    /**
     * @param array{
     *     PENDING?: int<0, max>,
     *     ACTIVE?: int<0, max>,
     *     IDLE?: int<0, max>,
     *     TERMINATING?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
