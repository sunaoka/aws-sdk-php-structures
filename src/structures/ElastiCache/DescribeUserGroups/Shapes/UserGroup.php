<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUserGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserGroupId
 * @property string $Status
 * @property string $Engine
 * @property list<string> $UserIds
 * @property string $MinimumEngineVersion
 * @property UserGroupPendingChanges $PendingChanges
 * @property list<string> $ReplicationGroups
 * @property list<string> $ServerlessCaches
 * @property string $ARN
 */
class UserGroup extends Shape
{
    /**
     * @param array{
     *     UserGroupId?: string,
     *     Status?: string,
     *     Engine?: string,
     *     UserIds?: list<string>,
     *     MinimumEngineVersion?: string,
     *     PendingChanges?: UserGroupPendingChanges,
     *     ReplicationGroups?: list<string>,
     *     ServerlessCaches?: list<string>,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
