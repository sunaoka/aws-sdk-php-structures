<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocationState|null $LocationState
 * @property list<'AUTO_SCALING'>|null $StoppedActions
 * @property 'PENDING_UPDATE'|null $UpdateStatus
 */
class LocationAttributes extends Shape
{
    /**
     * @param array{
     *     LocationState?: LocationState|null,
     *     StoppedActions?: list<'AUTO_SCALING'>|null,
     *     UpdateStatus?: 'PENDING_UPDATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
