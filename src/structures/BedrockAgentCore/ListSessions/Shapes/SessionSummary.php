<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $actorId
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     actorId: string,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
