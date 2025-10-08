<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetCodeInterpreterSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $codeInterpreterIdentifier
 * @property string $sessionId
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property int<1, 28800>|null $sessionTimeoutSeconds
 * @property 'READY'|'TERMINATED'|null $status
 */
class GetCodeInterpreterSessionResponse extends Response
{
}
