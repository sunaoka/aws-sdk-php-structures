<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $invocationIdentifier
 * @property string $invocationStepId
 * @property string $sessionIdentifier
 */
class GetInvocationStepRequest extends Request
{
    /**
     * @param array{
     *     invocationIdentifier: string,
     *     invocationStepId: string,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
