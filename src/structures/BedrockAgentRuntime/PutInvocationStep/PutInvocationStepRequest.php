<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\PutInvocationStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $invocationIdentifier
 * @property string|null $invocationStepId
 * @property \Aws\Api\DateTimeResult $invocationStepTime
 * @property Shapes\InvocationStepPayload $payload
 * @property string $sessionIdentifier
 */
class PutInvocationStepRequest extends Request
{
    /**
     * @param array{
     *     invocationIdentifier: string,
     *     invocationStepId?: string|null,
     *     invocationStepTime: \Aws\Api\DateTimeResult,
     *     payload: Shapes\InvocationStepPayload,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
