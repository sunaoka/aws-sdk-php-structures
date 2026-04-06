<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectAttribute> $ObjectAttributes
 */
class EventTriggerDimension extends Shape
{
    /**
     * @param array{ObjectAttributes: list<ObjectAttribute>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
