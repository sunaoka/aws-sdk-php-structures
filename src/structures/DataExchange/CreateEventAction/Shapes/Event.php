<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateEventAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RevisionPublished|null $RevisionPublished
 */
class Event extends Shape
{
    /**
     * @param array{RevisionPublished?: RevisionPublished|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
