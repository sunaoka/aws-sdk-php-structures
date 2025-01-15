<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseNodeGroupsInGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property int $NodeGroupCount
 * @property list<string>|null $GlobalNodeGroupsToRemove
 * @property list<string>|null $GlobalNodeGroupsToRetain
 * @property bool $ApplyImmediately
 */
class DecreaseNodeGroupsInGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     NodeGroupCount: int,
     *     GlobalNodeGroupsToRemove?: list<string>|null,
     *     GlobalNodeGroupsToRetain?: list<string>|null,
     *     ApplyImmediately: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
