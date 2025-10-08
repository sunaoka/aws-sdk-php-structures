<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $runtimeSessionId
 * @property string|null $mcpSessionId
 * @property string|null $mcpProtocolVersion
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string|null $traceState
 * @property string|null $baggage
 * @property string $contentType
 * @property \Psr\Http\Message\StreamInterface $response
 * @property int|null $statusCode
 */
class InvokeAgentRuntimeResponse extends Response
{
}
