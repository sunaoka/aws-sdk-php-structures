<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetEventAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RevisionPublished $RevisionPublished
 */
class Event extends Shape
{
    /**
     * @param array{RevisionPublished?: RevisionPublished} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
