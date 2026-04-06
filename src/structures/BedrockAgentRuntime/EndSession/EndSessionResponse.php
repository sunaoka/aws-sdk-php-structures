<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\EndSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionArn
 * @property string $sessionId
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 */
class EndSessionResponse extends Response
{
}
