<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocationSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invocationId
 * @property string $invocationStepId
 * @property \Aws\Api\DateTimeResult $invocationStepTime
 * @property string $sessionId
 */
class InvocationStepSummary extends Shape
{
    /**
     * @param array{
     *     invocationId: string,
     *     invocationStepId: string,
     *     invocationStepTime: \Aws\Api\DateTimeResult,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
