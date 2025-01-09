<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UserId
 * @property string $UserName
 * @property string $Status
 * @property string $Engine
 * @property string $MinimumEngineVersion
 * @property string $AccessString
 * @property list<string> $UserGroupIds
 * @property Shapes\Authentication $Authentication
 * @property string $ARN
 */
class CreateUserResponse extends Response
{
}
