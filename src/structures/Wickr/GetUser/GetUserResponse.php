<?php

namespace Sunaoka\Aws\Structures\Wickr\GetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $userId
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $username
 * @property bool|null $isAdmin
 * @property bool|null $suspended
 * @property int|null $status
 * @property int|null $lastActivity
 * @property int|null $lastLogin
 * @property list<string>|null $securityGroupIds
 */
class GetUserResponse extends Response
{
}
