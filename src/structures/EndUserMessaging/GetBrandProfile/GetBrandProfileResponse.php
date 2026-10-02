<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetBrandProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $brandProfileId
 * @property string $brandProfileArn
 * @property string $brandProfileName
 * @property 'ACTIVE'|'BLOCKED'|'PAUSED'|'CANCELLED'|'FAILED' $status
 * @property bool $deletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetBrandProfileResponse extends Response
{
}
