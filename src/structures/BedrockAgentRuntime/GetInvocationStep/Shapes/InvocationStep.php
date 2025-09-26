<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $invocationId
 * @property string $invocationStepId
 * @property \Aws\Api\DateTimeResult $invocationStepTime
 * @property InvocationStepPayload $payload
 */
class InvocationStep extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     invocationId: string,
     *     invocationStepId: string,
     *     invocationStepTime: \Aws\Api\DateTimeResult,
     *     payload: InvocationStepPayload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
