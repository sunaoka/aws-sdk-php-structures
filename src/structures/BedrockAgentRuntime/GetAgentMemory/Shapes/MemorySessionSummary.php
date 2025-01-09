<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property \Aws\Api\DateTimeResult $sessionExpiryTime
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $sessionStartTime
 * @property string $summaryText
 */
class MemorySessionSummary extends Shape
{
    /**
     * @param array{
     *     memoryId?: string,
     *     sessionExpiryTime?: \Aws\Api\DateTimeResult,
     *     sessionId?: string,
     *     sessionStartTime?: \Aws\Api\DateTimeResult,
     *     summaryText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
