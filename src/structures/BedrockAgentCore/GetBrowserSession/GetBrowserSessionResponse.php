<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\ViewPort|null $viewPort
 * @property int<1, 28800>|null $sessionTimeoutSeconds
 * @property 'READY'|'TERMINATED'|null $status
 * @property Shapes\BrowserSessionStream|null $streams
 * @property string|null $sessionReplayArtifact
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetBrowserSessionResponse extends Response
{
}
