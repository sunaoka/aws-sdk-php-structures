<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $NewGameSessionsPerCreator
 * @property int<0, max> $PolicyPeriodInMinutes
 */
class ResourceCreationLimitPolicy extends Shape
{
    /**
     * @param array{
     *     NewGameSessionsPerCreator?: int<0, max>,
     *     PolicyPeriodInMinutes?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
