<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $encryptionKeyArn
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $sessionArn
 * @property string $sessionId
 * @property array<string, string>|null $sessionMetadata
 * @property 'ACTIVE'|'EXPIRED'|'ENDED' $sessionStatus
 */
class GetSessionResponse extends Response
{
}
