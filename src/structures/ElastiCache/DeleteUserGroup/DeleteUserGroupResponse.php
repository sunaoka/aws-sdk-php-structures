<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteUserGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserGroupId
 * @property string|null $Status
 * @property string|null $Engine
 * @property list<string>|null $UserIds
 * @property string|null $MinimumEngineVersion
 * @property Shapes\UserGroupPendingChanges|null $PendingChanges
 * @property list<string>|null $ReplicationGroups
 * @property list<string>|null $ServerlessCaches
 * @property string|null $ARN
 */
class DeleteUserGroupResponse extends Response
{
}
