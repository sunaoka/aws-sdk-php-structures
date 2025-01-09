<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUser;

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
class ModifyUserResponse extends Response
{
}
