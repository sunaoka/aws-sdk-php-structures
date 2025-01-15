<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property string $name
 * @property string|null $email
 * @property string $phone
 * @property string $businessName
 * @property 'ENABLED'|'DISABLED'|null $logging
 * @property string|null $logGroupName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class UpdateProfileResponse extends Response
{
}
