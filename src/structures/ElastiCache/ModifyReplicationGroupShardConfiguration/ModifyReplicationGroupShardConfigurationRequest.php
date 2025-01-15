<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroupShardConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int $NodeGroupCount
 * @property bool $ApplyImmediately
 * @property list<Shapes\ReshardingConfiguration>|null $ReshardingConfiguration
 * @property list<string>|null $NodeGroupsToRemove
 * @property list<string>|null $NodeGroupsToRetain
 */
class ModifyReplicationGroupShardConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NodeGroupCount: int,
     *     ApplyImmediately: bool,
     *     ReshardingConfiguration?: list<Shapes\ReshardingConfiguration>|null,
     *     NodeGroupsToRemove?: list<string>|null,
     *     NodeGroupsToRetain?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
