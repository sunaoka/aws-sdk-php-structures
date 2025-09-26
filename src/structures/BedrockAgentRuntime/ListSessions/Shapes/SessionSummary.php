<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     sessionArn: string,
     *     sessionStatus: 'ACTIVE'|'EXPIRED'|'ENDED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
