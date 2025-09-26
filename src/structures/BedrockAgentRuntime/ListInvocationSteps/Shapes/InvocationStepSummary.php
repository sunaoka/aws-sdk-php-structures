<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocationSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $invocationId
 * @property string $invocationStepId
 * @property \Aws\Api\DateTimeResult $invocationStepTime
 */
class InvocationStepSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     invocationId: string,
     *     invocationStepId: string,
     *     invocationStepTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
