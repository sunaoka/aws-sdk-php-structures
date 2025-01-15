<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $NewGameSessionsPerCreator
 * @property int<0, max>|null $PolicyPeriodInMinutes
 */
class ResourceCreationLimitPolicy extends Shape
{
    /**
     * @param array{
     *     NewGameSessionsPerCreator?: int<0, max>|null,
     *     PolicyPeriodInMinutes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
