<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $actorId
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property list<Shapes\PayloadType> $payload
 * @property Shapes\Branch|null $branch
 * @property string|null $clientToken
 * @property array<string, Shapes\MetadataValue>|null $metadata
 */
class CreateEventRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     actorId: string,
     *     sessionId?: string|null,
     *     eventTimestamp: \Aws\Api\DateTimeResult,
     *     payload: list<Shapes\PayloadType>,
     *     branch?: Shapes\Branch|null,
     *     clientToken?: string|null,
     *     metadata?: array<string, Shapes\MetadataValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
