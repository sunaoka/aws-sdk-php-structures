<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DESIRED
 * @property int $MINIMUM
 * @property int $MAXIMUM
 * @property int $PENDING
 * @property int $ACTIVE
 * @property int $IDLE
 * @property int $TERMINATING
 */
class EC2InstanceCounts extends Shape
{
    /**
     * @param array{
     *     DESIRED?: int,
     *     MINIMUM?: int,
     *     MAXIMUM?: int,
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
