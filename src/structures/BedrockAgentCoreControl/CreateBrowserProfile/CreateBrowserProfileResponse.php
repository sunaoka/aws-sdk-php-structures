<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'READY'|'DELETING'|'DELETED'|'SAVING' $status
 */
class CreateBrowserProfileResponse extends Response
{
}
