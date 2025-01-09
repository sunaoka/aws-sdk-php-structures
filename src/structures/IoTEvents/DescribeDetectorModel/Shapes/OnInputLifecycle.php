<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Event> $events
 * @property list<TransitionEvent> $transitionEvents
 */
class OnInputLifecycle extends Shape
{
    /**
     * @param array{
     *     events?: list<Event>,
     *     transitionEvents?: list<TransitionEvent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
