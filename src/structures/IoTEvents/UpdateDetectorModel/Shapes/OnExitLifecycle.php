<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Event> $events
 */
class OnExitLifecycle extends Shape
{
    /**
     * @param array{events?: list<Event>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
