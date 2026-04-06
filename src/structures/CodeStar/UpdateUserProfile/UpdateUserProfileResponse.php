<?php

namespace Sunaoka\Aws\Structures\CodeStar\UpdateUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $userArn
 * @property string|null $displayName
 * @property string|null $emailAddress
 * @property string|null $sshPublicKey
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 */
class UpdateUserProfileResponse extends Response
{
}
