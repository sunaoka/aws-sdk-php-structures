<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateBrowserStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property Shapes\BrowserSessionStream $streams
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateBrowserStreamResponse extends Response
{
}
