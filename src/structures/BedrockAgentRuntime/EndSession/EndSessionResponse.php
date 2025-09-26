<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\EndSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 */
class EndSessionResponse extends Response
{
}
