<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\ClusterInstanceGroupSpecification>|null $InstanceGroups
 * @property list<Shapes\ClusterRestrictedInstanceGroupSpecification>|null $RestrictedInstanceGroups
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ClusterOrchestrator|null $Orchestrator
 * @property 'Automatic'|'None'|null $NodeRecovery
 * @property Shapes\ClusterTieredStorageConfig|null $TieredStorageConfig
 * @property 'Continuous'|null $NodeProvisioningMode
 * @property string|null $ClusterRole
 * @property Shapes\ClusterAutoScalingConfig|null $AutoScaling
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups?: list<Shapes\ClusterInstanceGroupSpecification>|null,
     *     RestrictedInstanceGroups?: list<Shapes\ClusterRestrictedInstanceGroupSpecification>|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Orchestrator?: Shapes\ClusterOrchestrator|null,
     *     NodeRecovery?: 'Automatic'|'None'|null,
     *     TieredStorageConfig?: Shapes\ClusterTieredStorageConfig|null,
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
