<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateSessionResponse extends Response
{
}
