<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $sessionArn
 * @property string $sessionId
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 */
class CreateSessionResponse extends Response
{
}
