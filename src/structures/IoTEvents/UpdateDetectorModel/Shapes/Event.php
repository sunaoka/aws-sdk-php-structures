<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventName
 * @property string $condition
 * @property list<Action> $actions
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventName: string,
     *     condition?: string,
     *     actions?: list<Action>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
