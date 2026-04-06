<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property string $actorId
 * @property string $sessionId
 * @property string $eventId
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property list<PayloadType> $payload
 * @property Branch|null $branch
 * @property array<string, MetadataValue>|null $metadata
 */
class Event extends Shape
{
    /**
     * @param array{
     *     memoryId: string,
     *     actorId: string,
     *     sessionId: string,
     *     eventId: string,
     *     eventTimestamp: \Aws\Api\DateTimeResult,
     *     payload: list<PayloadType>,
     *     branch?: Branch|null,
     *     metadata?: array<string, MetadataValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
