<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\ClusterInstanceGroupSpecification>|null $InstanceGroups
 * @property list<Shapes\ClusterRestrictedInstanceGroupSpecification>|null $RestrictedInstanceGroups
 * @property Shapes\ClusterTieredStorageConfig|null $TieredStorageConfig
 * @property 'Automatic'|'None'|null $NodeRecovery
 * @property list<string>|null $InstanceGroupsToDelete
 * @property 'Continuous'|null $NodeProvisioningMode
 * @property string|null $ClusterRole
 * @property Shapes\ClusterAutoScalingConfig|null $AutoScaling
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups?: list<Shapes\ClusterInstanceGroupSpecification>|null,
     *     RestrictedInstanceGroups?: list<Shapes\ClusterRestrictedInstanceGroupSpecification>|null,
     *     TieredStorageConfig?: Shapes\ClusterTieredStorageConfig|null,
     *     NodeRecovery?: 'Automatic'|'None'|null,
     *     InstanceGroupsToDelete?: list<string>|null,
     *     NodeProvisioningMode?: 'Continuous'|null,
     *     ClusterRole?: string|null,
     *     AutoScaling?: Shapes\ClusterAutoScalingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
