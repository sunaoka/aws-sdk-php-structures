<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $contentType
 * @property string|null $accept
 * @property string|null $mcpSessionId
 * @property string|null $runtimeSessionId
 * @property string|null $mcpProtocolVersion
 * @property string|null $runtimeUserId
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string|null $traceState
 * @property string|null $baggage
 * @property string $agentRuntimeArn
 * @property string|null $qualifier
 * @property string|null $accountId
 * @property string|resource|\Psr\Http\Message\StreamInterface $payload
 */
class InvokeAgentRuntimeRequest extends Request
{
    /**
     * @param array{
     *     contentType?: string|null,
     *     accept?: string|null,
     *     mcpSessionId?: string|null,
     *     runtimeSessionId?: string|null,
     *     mcpProtocolVersion?: string|null,
     *     runtimeUserId?: string|null,
     *     traceId?: string|null,
     *     traceParent?: string|null,
     *     traceState?: string|null,
     *     baggage?: string|null,
     *     agentRuntimeArn: string,
     *     qualifier?: string|null,
     *     accountId?: string|null,
     *     payload: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
