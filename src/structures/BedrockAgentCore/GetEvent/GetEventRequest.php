<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $sessionId
 * @property string $actorId
 * @property string $eventId
 */
class GetEventRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     sessionId: string,
     *     actorId: string,
     *     eventId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
