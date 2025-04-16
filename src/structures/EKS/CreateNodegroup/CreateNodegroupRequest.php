<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 * @property Shapes\NodegroupScalingConfig|null $scalingConfig
 * @property int|null $diskSize
 * @property list<string> $subnets
 * @property list<string>|null $instanceTypes
 * @property 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_FIPS'|'BOTTLEROCKET_x86_64_FIPS'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA'|'AL2023_ARM_64_NVIDIA'|null $amiType
 * @property Shapes\RemoteAccessConfig|null $remoteAccess
 * @property string $nodeRole
 * @property array<string, string>|null $labels
 * @property list<Shapes\Taint>|null $taints
 * @property array<string, string>|null $tags
 * @property string|null $clientRequestToken
 * @property Shapes\LaunchTemplateSpecification|null $launchTemplate
 * @property Shapes\NodegroupUpdateConfig|null $updateConfig
 * @property Shapes\NodeRepairConfig|null $nodeRepairConfig
 * @property 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK'|null $capacityType
 * @property string|null $version
 * @property string|null $releaseVersion
 */
class CreateNodegroupRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string,
     *     scalingConfig?: Shapes\NodegroupScalingConfig|null,
     *     diskSize?: int|null,
     *     subnets: list<string>,
     *     instanceTypes?: list<string>|null,
     *     amiType?: 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_FIPS'|'BOTTLEROCKET_x86_64_FIPS'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA'|'AL2023_ARM_64_NVIDIA'|null,
     *     remoteAccess?: Shapes\RemoteAccessConfig|null,
     *     nodeRole: string,
     *     labels?: array<string, string>|null,
     *     taints?: list<Shapes\Taint>|null,
     *     tags?: array<string, string>|null,
     *     clientRequestToken?: string|null,
     *     launchTemplate?: Shapes\LaunchTemplateSpecification|null,
     *     updateConfig?: Shapes\NodegroupUpdateConfig|null,
     *     nodeRepairConfig?: Shapes\NodeRepairConfig|null,
     *     capacityType?: 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK'|null,
     *     version?: string|null,
     *     releaseVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
