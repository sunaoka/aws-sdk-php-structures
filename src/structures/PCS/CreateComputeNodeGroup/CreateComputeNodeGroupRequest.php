<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $amiId
 * @property list<string>|null $securityGroupIds
 * @property string|null $sshKeyName
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupName
 * @property list<string> $subnetIds
 * @property 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|'INTERRUPTIBLE_CAPACITY_RESERVATION'|null $purchaseOption
 * @property 'CUSTOM'|'MANAGED'|null $launchTemplateMode
 * @property Shapes\CustomLaunchTemplate|null $customLaunchTemplate
 * @property string $iamInstanceProfileArn
 * @property Shapes\ScalingConfigurationRequest $scalingConfiguration
 * @property list<Shapes\InstanceConfig> $instanceConfigs
 * @property Shapes\SpotOptions|null $spotOptions
 * @property Shapes\ComputeNodeGroupSlurmConfigurationRequest|null $slurmConfiguration
 * @property Shapes\NodeLifecycleActionsRequest|null $nodeLifecycleActions
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     amiId?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     sshKeyName?: string|null,
     *     clusterIdentifier: string,
     *     computeNodeGroupName: string,
     *     subnetIds: list<string>,
     *     purchaseOption?: 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|'INTERRUPTIBLE_CAPACITY_RESERVATION'|null,
     *     launchTemplateMode?: 'CUSTOM'|'MANAGED'|null,
     *     customLaunchTemplate?: Shapes\CustomLaunchTemplate|null,
     *     iamInstanceProfileArn: string,
     *     scalingConfiguration: Shapes\ScalingConfigurationRequest,
     *     instanceConfigs: list<Shapes\InstanceConfig>,
     *     spotOptions?: Shapes\SpotOptions|null,
     *     slurmConfiguration?: Shapes\ComputeNodeGroupSlurmConfigurationRequest|null,
     *     nodeLifecycleActions?: Shapes\NodeLifecycleActionsRequest|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
