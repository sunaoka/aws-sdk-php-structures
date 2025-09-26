<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\PutInvocationStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionIdentifier
 * @property string $invocationIdentifier
 * @property \Aws\Api\DateTimeResult $invocationStepTime
 * @property Shapes\InvocationStepPayload $payload
 * @property string|null $invocationStepId
 */
class PutInvocationStepRequest extends Request
{
    /**
     * @param array{
     *     sessionIdentifier: string,
     *     invocationIdentifier: string,
     *     invocationStepTime: \Aws\Api\DateTimeResult,
     *     payload: Shapes\InvocationStepPayload,
     *     invocationStepId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
