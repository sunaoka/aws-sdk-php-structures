<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocationState $LocationState
 * @property list<'AUTO_SCALING'> $StoppedActions
 * @property 'PENDING_UPDATE' $UpdateStatus
 */
class LocationAttributes extends Shape
{
    /**
     * @param array{
     *     LocationState?: LocationState,
     *     StoppedActions?: list<'AUTO_SCALING'>,
     *     UpdateStatus?: 'PENDING_UPDATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
