<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteBrowserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property 'READY'|'DELETING'|'DELETED'|'SAVING' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $lastSavedAt
 */
class DeleteBrowserProfileResponse extends Response
{
}
