<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupIdentifier
 * @property string|null $amiId
 * @property list<string>|null $subnetIds
 * @property Shapes\CustomLaunchTemplate|null $customLaunchTemplate
 * @property 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|null $purchaseOption
 * @property Shapes\SpotOptions|null $spotOptions
 * @property Shapes\ScalingConfigurationRequest|null $scalingConfiguration
 * @property string|null $iamInstanceProfileArn
 * @property Shapes\UpdateComputeNodeGroupSlurmConfigurationRequest|null $slurmConfiguration
 * @property string|null $clientToken
 */
class UpdateComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     computeNodeGroupIdentifier: string,
     *     amiId?: string|null,
     *     subnetIds?: list<string>|null,
     *     customLaunchTemplate?: Shapes\CustomLaunchTemplate|null,
     *     purchaseOption?: 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|null,
     *     spotOptions?: Shapes\SpotOptions|null,
     *     scalingConfiguration?: Shapes\ScalingConfigurationRequest|null,
     *     iamInstanceProfileArn?: string|null,
     *     slurmConfiguration?: Shapes\UpdateComputeNodeGroupSlurmConfigurationRequest|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
