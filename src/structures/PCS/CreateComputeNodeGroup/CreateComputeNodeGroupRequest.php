<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupName
 * @property string|null $amiId
 * @property list<string> $subnetIds
 * @property 'ONDEMAND'|'SPOT'|null $purchaseOption
 * @property Shapes\CustomLaunchTemplate $customLaunchTemplate
 * @property string $iamInstanceProfileArn
 * @property Shapes\ScalingConfigurationRequest $scalingConfiguration
 * @property list<Shapes\InstanceConfig> $instanceConfigs
 * @property Shapes\SpotOptions|null $spotOptions
 * @property Shapes\ComputeNodeGroupSlurmConfigurationRequest|null $slurmConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     computeNodeGroupName: string,
     *     amiId?: string|null,
     *     subnetIds: list<string>,
     *     purchaseOption?: 'ONDEMAND'|'SPOT'|null,
     *     customLaunchTemplate: Shapes\CustomLaunchTemplate,
     *     iamInstanceProfileArn: string,
     *     scalingConfiguration: Shapes\ScalingConfigurationRequest,
     *     instanceConfigs: list<Shapes\InstanceConfig>,
     *     spotOptions?: Shapes\SpotOptions|null,
     *     slurmConfiguration?: Shapes\ComputeNodeGroupSlurmConfigurationRequest|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
