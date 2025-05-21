<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $sessionArn
 * @property string $sessionId
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     sessionArn: string,
     *     sessionId: string,
     *     sessionStatus: 'ACTIVE'|'EXPIRED'|'ENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
