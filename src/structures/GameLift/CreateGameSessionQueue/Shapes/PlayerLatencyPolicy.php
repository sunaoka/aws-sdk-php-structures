<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSessionQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $MaximumIndividualPlayerLatencyMilliseconds
 * @property int<0, max>|null $PolicyDurationSeconds
 */
class PlayerLatencyPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumIndividualPlayerLatencyMilliseconds?: int<0, max>|null,
     *     PolicyDurationSeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
