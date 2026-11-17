<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property string $spaceId
 * @property string $actorId
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 */
class EventDetail extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     spaceId: string,
     *     actorId: string,
     *     sessionId: string,
     *     eventTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
