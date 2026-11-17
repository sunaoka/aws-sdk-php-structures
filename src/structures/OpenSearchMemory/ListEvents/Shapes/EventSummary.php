<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property array<string, string>|null $metadata
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 */
class EventSummary extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     metadata?: array<string, string>|null,
     *     eventTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
