<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSessionQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $MaximumIndividualPlayerLatencyMilliseconds
 * @property int<0, max> $PolicyDurationSeconds
 */
class PlayerLatencyPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumIndividualPlayerLatencyMilliseconds?: int<0, max>,
     *     PolicyDurationSeconds?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
