<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invocationId
 * @property string $invocationStepId
 * @property \Aws\Api\DateTimeResult $invocationStepTime
 * @property InvocationStepPayload $payload
 * @property string $sessionId
 */
class InvocationStep extends Shape
{
    /**
     * @param array{
     *     invocationId: string,
     *     invocationStepId: string,
     *     invocationStepTime: \Aws\Api\DateTimeResult,
     *     payload: InvocationStepPayload,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
