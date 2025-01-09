<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupIdentifier
 * @property string $amiId
 * @property list<string> $subnetIds
 * @property Shapes\CustomLaunchTemplate $customLaunchTemplate
 * @property 'ONDEMAND'|'SPOT' $purchaseOption
 * @property Shapes\SpotOptions $spotOptions
 * @property Shapes\ScalingConfigurationRequest $scalingConfiguration
 * @property string $iamInstanceProfileArn
 * @property Shapes\UpdateComputeNodeGroupSlurmConfigurationRequest $slurmConfiguration
 * @property string $clientToken
 */
class UpdateComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     computeNodeGroupIdentifier: string,
     *     amiId?: string,
     *     subnetIds?: list<string>,
     *     customLaunchTemplate?: Shapes\CustomLaunchTemplate,
     *     purchaseOption?: 'ONDEMAND'|'SPOT',
     *     spotOptions?: Shapes\SpotOptions,
     *     scalingConfiguration?: Shapes\ScalingConfigurationRequest,
     *     iamInstanceProfileArn?: string,
     *     slurmConfiguration?: Shapes\UpdateComputeNodeGroupSlurmConfigurationRequest,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
