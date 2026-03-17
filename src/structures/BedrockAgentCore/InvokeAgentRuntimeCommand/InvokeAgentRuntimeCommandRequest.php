<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $contentType
 * @property string|null $accept
 * @property string|null $runtimeSessionId
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string|null $traceState
 * @property string|null $baggage
 * @property string $agentRuntimeArn
 * @property string|null $qualifier
 * @property string|null $accountId
 * @property Shapes\InvokeAgentRuntimeCommandRequestBody $body
 */
class InvokeAgentRuntimeCommandRequest extends Request
{
    /**
     * @param array{
     *     contentType?: string|null,
     *     accept?: string|null,
     *     runtimeSessionId?: string|null,
     *     traceId?: string|null,
     *     traceParent?: string|null,
     *     traceState?: string|null,
     *     baggage?: string|null,
     *     agentRuntimeArn: string,
     *     qualifier?: string|null,
     *     accountId?: string|null,
     *     body: Shapes\InvokeAgentRuntimeCommandRequestBody
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
