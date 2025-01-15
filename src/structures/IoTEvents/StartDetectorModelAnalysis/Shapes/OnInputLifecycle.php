<?php

namespace Sunaoka\Aws\Structures\IoTEvents\StartDetectorModelAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Event>|null $events
 * @property list<TransitionEvent>|null $transitionEvents
 */
class OnInputLifecycle extends Shape
{
    /**
     * @param array{
     *     events?: list<Event>|null,
     *     transitionEvents?: list<TransitionEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
