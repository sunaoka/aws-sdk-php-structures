<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $actorId
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property Shapes\EventPayload $payload
 * @property array<string, string>|null $metadata
 * @property string|null $clientToken
 * @property bool|null $infer
 */
class CreateEventRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     actorId: string,
     *     sessionId?: string|null,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     payload: Shapes\EventPayload,
     *     metadata?: array<string, string>|null,
     *     clientToken?: string|null,
     *     infer?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
