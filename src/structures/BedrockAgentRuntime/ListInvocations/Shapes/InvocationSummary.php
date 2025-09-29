<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $invocationId
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class InvocationSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     invocationId: string,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
