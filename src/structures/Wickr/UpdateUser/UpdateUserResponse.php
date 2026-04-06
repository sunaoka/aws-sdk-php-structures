<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $userId
 * @property string $networkId
 * @property list<string>|null $securityGroupIds
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $middleName
 * @property bool $suspended
 * @property int|null $modified
 * @property int|null $status
 * @property string|null $inviteCode
 * @property int|null $inviteExpiration
 * @property bool|null $codeValidation
 */
class UpdateUserResponse extends Response
{
}
