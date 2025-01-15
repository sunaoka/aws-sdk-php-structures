<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventName
 * @property string|null $condition
 * @property list<Action>|null $actions
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventName: string,
     *     condition?: string|null,
     *     actions?: list<Action>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
