<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseNodeGroupsInGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property int $NodeGroupCount
 * @property list<Shapes\RegionalConfiguration> $RegionalConfigurations
 * @property bool $ApplyImmediately
 */
class IncreaseNodeGroupsInGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     NodeGroupCount: int,
     *     RegionalConfigurations?: list<Shapes\RegionalConfiguration>,
     *     ApplyImmediately: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
