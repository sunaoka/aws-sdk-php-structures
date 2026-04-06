<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $sessionId
 * @property string $eventId
 * @property string $actorId
 */
class DeleteEventRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     sessionId: string,
     *     eventId: string,
     *     actorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
