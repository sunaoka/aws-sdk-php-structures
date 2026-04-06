<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $invocationId
 * @property string $sessionId
 */
class InvocationSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     invocationId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
