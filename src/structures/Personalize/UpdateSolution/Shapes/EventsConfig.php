<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EventParameters>|null $eventParametersList
 */
class EventsConfig extends Shape
{
    /**
     * @param array{eventParametersList?: list<EventParameters>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
