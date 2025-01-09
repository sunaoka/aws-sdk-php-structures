<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NewGameSessionsPerCreator
 * @property int $PolicyPeriodInMinutes
 */
class ResourceCreationLimitPolicy extends Shape
{
    /**
     * @param array{
     *     NewGameSessionsPerCreator?: int,
     *     PolicyPeriodInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
