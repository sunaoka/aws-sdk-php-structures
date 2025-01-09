<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroupShardConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int $NodeGroupCount
 * @property bool $ApplyImmediately
 * @property list<Shapes\ReshardingConfiguration> $ReshardingConfiguration
 * @property list<string> $NodeGroupsToRemove
 * @property list<string> $NodeGroupsToRetain
 */
class ModifyReplicationGroupShardConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NodeGroupCount: int,
     *     ApplyImmediately: bool,
     *     ReshardingConfiguration?: list<Shapes\ReshardingConfiguration>,
     *     NodeGroupsToRemove?: list<string>,
     *     NodeGroupsToRetain?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
