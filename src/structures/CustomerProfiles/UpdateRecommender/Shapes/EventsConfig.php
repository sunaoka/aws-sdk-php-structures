<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EventParameters> $EventParametersList
 */
class EventsConfig extends Shape
{
    /**
     * @param array{EventParametersList: list<EventParameters>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
