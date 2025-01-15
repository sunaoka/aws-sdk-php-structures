<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property string $name
 * @property string $businessName
 * @property string $phone
 * @property string|null $email
 * @property 'ENABLED'|'DISABLED'|null $logging
 * @property string|null $logGroupName
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateProfileResponse extends Response
{
}
