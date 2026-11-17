<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property string $spaceId
 * @property string $actorId
 * @property string $sessionId
 * @property EventPayload $payload
 * @property array<string, string>|null $metadata
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     spaceId: string,
     *     actorId: string,
     *     sessionId: string,
     *     payload: EventPayload,
     *     metadata?: array<string, string>|null,
     *     eventTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
