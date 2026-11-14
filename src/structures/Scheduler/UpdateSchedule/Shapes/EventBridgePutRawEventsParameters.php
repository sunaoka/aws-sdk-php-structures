<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Metadata
 */
class EventBridgePutRawEventsParameters extends Shape
{
    /**
     * @param array{Metadata?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
