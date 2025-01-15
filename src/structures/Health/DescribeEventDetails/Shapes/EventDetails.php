<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Event|null $event
 * @property EventDescription|null $eventDescription
 * @property array<string, string>|null $eventMetadata
 */
class EventDetails extends Shape
{
    /**
     * @param array{
     *     event?: Event|null,
     *     eventDescription?: EventDescription|null,
     *     eventMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
