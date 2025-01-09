<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Event $event
 * @property EventDescription $eventDescription
 * @property array<string, string> $eventMetadata
 */
class EventDetails extends Shape
{
    /**
     * @param array{
     *     event?: Event,
     *     eventDescription?: EventDescription,
     *     eventMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
