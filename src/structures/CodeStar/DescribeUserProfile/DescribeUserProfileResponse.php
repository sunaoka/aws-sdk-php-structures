<?php

namespace Sunaoka\Aws\Structures\CodeStar\DescribeUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $userArn
 * @property string|null $displayName
 * @property string|null $emailAddress
 * @property string|null $sshPublicKey
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 */
class DescribeUserProfileResponse extends Response
{
}
