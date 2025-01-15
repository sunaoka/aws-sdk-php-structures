<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $DESIRED
 * @property int<0, max>|null $MINIMUM
 * @property int<0, max>|null $MAXIMUM
 * @property int<0, max>|null $PENDING
 * @property int<0, max>|null $ACTIVE
 * @property int<0, max>|null $IDLE
 * @property int<0, max>|null $TERMINATING
 */
class EC2InstanceCounts extends Shape
{
    /**
     * @param array{
     *     DESIRED?: int<0, max>|null,
     *     MINIMUM?: int<0, max>|null,
     *     MAXIMUM?: int<0, max>|null,
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
