<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUserGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UserGroupId
 * @property string $Status
 * @property string $Engine
 * @property list<string> $UserIds
 * @property string $MinimumEngineVersion
 * @property Shapes\UserGroupPendingChanges $PendingChanges
 * @property list<string> $ReplicationGroups
 * @property list<string> $ServerlessCaches
 * @property string $ARN
 */
class CreateUserGroupResponse extends Response
{
}
