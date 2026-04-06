<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\UpdateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $sessionArn
 * @property string $sessionId
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 */
class UpdateSessionResponse extends Response
{
}
