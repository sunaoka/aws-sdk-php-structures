<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\BrowserSessionStream|null $streams
 */
class StartBrowserSessionResponse extends Response
{
}
