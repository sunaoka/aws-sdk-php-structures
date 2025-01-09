<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 * @property Shapes\NodegroupScalingConfig $scalingConfig
 * @property int $diskSize
 * @property list<string> $subnets
 * @property list<string> $instanceTypes
 * @property 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA' $amiType
 * @property Shapes\RemoteAccessConfig $remoteAccess
 * @property string $nodeRole
 * @property array<string, string> $labels
 * @property list<Shapes\Taint> $taints
 * @property array<string, string> $tags
 * @property string $clientRequestToken
 * @property Shapes\LaunchTemplateSpecification $launchTemplate
 * @property Shapes\NodegroupUpdateConfig $updateConfig
 * @property Shapes\NodeRepairConfig $nodeRepairConfig
 * @property 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK' $capacityType
 * @property string $version
 * @property string $releaseVersion
 */
class CreateNodegroupRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string,
     *     scalingConfig?: Shapes\NodegroupScalingConfig,
     *     diskSize?: int,
     *     subnets: list<string>,
     *     instanceTypes?: list<string>,
     *     amiType?: 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA',
     *     remoteAccess?: Shapes\RemoteAccessConfig,
     *     nodeRole: string,
     *     labels?: array<string, string>,
     *     taints?: list<Shapes\Taint>,
     *     tags?: array<string, string>,
     *     clientRequestToken?: string,
     *     launchTemplate?: Shapes\LaunchTemplateSpecification,
     *     updateConfig?: Shapes\NodegroupUpdateConfig,
     *     nodeRepairConfig?: Shapes\NodeRepairConfig,
     *     capacityType?: 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK',
     *     version?: string,
     *     releaseVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
