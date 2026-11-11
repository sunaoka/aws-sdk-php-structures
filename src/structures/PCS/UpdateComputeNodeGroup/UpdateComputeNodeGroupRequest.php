<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $amiId
 * @property list<string>|null $securityGroupIds
 * @property string|null $sshKeyName
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupIdentifier
 * @property list<string>|null $subnetIds
 * @property 'CUSTOM'|'MANAGED'|null $launchTemplateMode
 * @property Shapes\CustomLaunchTemplate|null $customLaunchTemplate
 * @property 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|'INTERRUPTIBLE_CAPACITY_RESERVATION'|null $purchaseOption
 * @property Shapes\SpotOptions|null $spotOptions
 * @property Shapes\ScalingConfigurationRequest|null $scalingConfiguration
 * @property string|null $iamInstanceProfileArn
 * @property Shapes\UpdateComputeNodeGroupSlurmConfigurationRequest|null $slurmConfiguration
 * @property Shapes\UpdateNodeLifecycleActionsRequest|null $nodeLifecycleActions
 * @property string|null $clientToken
 */
class UpdateComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     amiId?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     sshKeyName?: string|null,
     *     clusterIdentifier: string,
     *     computeNodeGroupIdentifier: string,
     *     subnetIds?: list<string>|null,
     *     launchTemplateMode?: 'CUSTOM'|'MANAGED'|null,
     *     customLaunchTemplate?: Shapes\CustomLaunchTemplate|null,
     *     purchaseOption?: 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|'INTERRUPTIBLE_CAPACITY_RESERVATION'|null,
     *     spotOptions?: Shapes\SpotOptions|null,
     *     scalingConfiguration?: Shapes\ScalingConfigurationRequest|null,
     *     iamInstanceProfileArn?: string|null,
     *     slurmConfiguration?: Shapes\UpdateComputeNodeGroupSlurmConfigurationRequest|null,
     *     nodeLifecycleActions?: Shapes\UpdateNodeLifecycleActionsRequest|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
