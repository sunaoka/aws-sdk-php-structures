<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopRuntimeSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $runtimeSessionId
 * @property string $agentRuntimeArn
 * @property string|null $qualifier
 * @property string|null $clientToken
 */
class StopRuntimeSessionRequest extends Request
{
    /**
     * @param array{
     *     runtimeSessionId: string,
     *     agentRuntimeArn: string,
     *     qualifier?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
