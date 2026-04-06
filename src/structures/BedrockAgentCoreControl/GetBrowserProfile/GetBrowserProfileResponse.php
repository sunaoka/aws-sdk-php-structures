<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetBrowserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property string $name
 * @property string|null $description
 * @property 'READY'|'DELETING'|'DELETED'|'SAVING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $lastSavedAt
 * @property string|null $lastSavedBrowserSessionId
 * @property string|null $lastSavedBrowserId
 */
class GetBrowserProfileResponse extends Response
{
}
