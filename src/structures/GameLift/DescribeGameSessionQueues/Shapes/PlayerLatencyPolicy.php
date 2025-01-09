<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumIndividualPlayerLatencyMilliseconds
 * @property int $PolicyDurationSeconds
 */
class PlayerLatencyPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumIndividualPlayerLatencyMilliseconds?: int,
     *     PolicyDurationSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
