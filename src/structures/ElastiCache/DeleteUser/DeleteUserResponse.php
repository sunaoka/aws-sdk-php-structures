<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserId
 * @property string|null $UserName
 * @property string|null $Status
 * @property string|null $Engine
 * @property string|null $MinimumEngineVersion
 * @property string|null $AccessString
 * @property list<string>|null $UserGroupIds
 * @property Shapes\Authentication|null $Authentication
 * @property string|null $ARN
 */
class DeleteUserResponse extends Response
{
}
