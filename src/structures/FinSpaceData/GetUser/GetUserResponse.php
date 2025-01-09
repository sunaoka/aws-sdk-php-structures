<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $userId
 * @property 'CREATING'|'ENABLED'|'DISABLED' $status
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property 'SUPER_USER'|'APP_USER' $type
 * @property 'ENABLED'|'DISABLED' $apiAccess
 * @property string $apiAccessPrincipalArn
 * @property int $createTime
 * @property int $lastEnabledTime
 * @property int $lastDisabledTime
 * @property int $lastModifiedTime
 * @property int $lastLoginTime
 */
class GetUserResponse extends Response
{
}
