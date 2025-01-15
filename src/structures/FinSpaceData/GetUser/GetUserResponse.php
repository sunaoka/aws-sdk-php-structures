<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $userId
 * @property 'CREATING'|'ENABLED'|'DISABLED'|null $status
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $emailAddress
 * @property 'SUPER_USER'|'APP_USER'|null $type
 * @property 'ENABLED'|'DISABLED'|null $apiAccess
 * @property string|null $apiAccessPrincipalArn
 * @property int|null $createTime
 * @property int|null $lastEnabledTime
 * @property int|null $lastDisabledTime
 * @property int|null $lastModifiedTime
 * @property int|null $lastLoginTime
 */
class GetUserResponse extends Response
{
}
