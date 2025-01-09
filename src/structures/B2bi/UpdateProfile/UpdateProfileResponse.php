<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $businessName
 * @property 'ENABLED'|'DISABLED' $logging
 * @property string $logGroupName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class UpdateProfileResponse extends Response
{
}
