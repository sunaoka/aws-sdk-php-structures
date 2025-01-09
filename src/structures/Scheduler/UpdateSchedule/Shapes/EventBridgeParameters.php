<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetailType
 * @property string $Source
 */
class EventBridgeParameters extends Shape
{
    /**
     * @param array{
     *     DetailType: string,
     *     Source: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
