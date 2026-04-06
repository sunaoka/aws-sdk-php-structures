<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $runtimeSessionId
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string|null $traceState
 * @property string|null $baggage
 * @property string $contentType
 * @property int|null $statusCode
 * @property Shapes\InvokeAgentRuntimeCommandStreamOutput $stream
 */
class InvokeAgentRuntimeCommandResponse extends Response
{
}
