<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUserGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserGroupId
 * @property string|null $Status
 * @property string|null $Engine
 * @property list<string>|null $UserIds
 * @property string|null $MinimumEngineVersion
 * @property UserGroupPendingChanges|null $PendingChanges
 * @property list<string>|null $ReplicationGroups
 * @property list<string>|null $ServerlessCaches
 * @property string|null $ARN
 */
class UserGroup extends Shape
{
    /**
     * @param array{
     *     UserGroupId?: string|null,
     *     Status?: string|null,
     *     Engine?: string|null,
     *     UserIds?: list<string>|null,
     *     MinimumEngineVersion?: string|null,
     *     PendingChanges?: UserGroupPendingChanges|null,
     *     ReplicationGroups?: list<string>|null,
     *     ServerlessCaches?: list<string>|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
