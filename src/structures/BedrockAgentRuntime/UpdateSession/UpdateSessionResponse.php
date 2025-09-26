<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\UpdateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class UpdateSessionResponse extends Response
{
}
