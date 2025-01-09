<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupName
 * @property string $amiId
 * @property list<string> $subnetIds
 * @property 'ONDEMAND'|'SPOT' $purchaseOption
 * @property Shapes\CustomLaunchTemplate $customLaunchTemplate
 * @property string $iamInstanceProfileArn
 * @property Shapes\ScalingConfigurationRequest $scalingConfiguration
 * @property list<Shapes\InstanceConfig> $instanceConfigs
 * @property Shapes\SpotOptions $spotOptions
 * @property Shapes\ComputeNodeGroupSlurmConfigurationRequest $slurmConfiguration
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     computeNodeGroupName: string,
     *     amiId?: string,
     *     subnetIds: list<string>,
     *     purchaseOption?: 'ONDEMAND'|'SPOT',
     *     customLaunchTemplate: Shapes\CustomLaunchTemplate,
     *     iamInstanceProfileArn: string,
     *     scalingConfiguration: Shapes\ScalingConfigurationRequest,
     *     instanceConfigs: list<Shapes\InstanceConfig>,
     *     spotOptions?: Shapes\SpotOptions,
     *     slurmConfiguration?: Shapes\ComputeNodeGroupSlurmConfigurationRequest,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
