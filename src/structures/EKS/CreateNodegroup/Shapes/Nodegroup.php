<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodegroupName
 * @property string|null $nodegroupArn
 * @property string|null $clusterName
 * @property string|null $version
 * @property string|null $releaseVersion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'DEGRADED'|null $status
 * @property 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK'|null $capacityType
 * @property NodegroupScalingConfig|null $scalingConfig
 * @property list<string>|null $instanceTypes
 * @property list<string>|null $subnets
 * @property RemoteAccessConfig|null $remoteAccess
 * @property 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_FIPS'|'BOTTLEROCKET_x86_64_FIPS'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'BOTTLEROCKET_ARM_64_NVIDIA_FIPS'|'BOTTLEROCKET_x86_64_NVIDIA_FIPS'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'WINDOWS_CORE_2025_x86_64'|'WINDOWS_FULL_2025_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA'|'AL2023_ARM_64_NVIDIA'|null $amiType
 * @property string|null $nodeRole
 * @property array<string, string>|null $labels
 * @property list<Taint>|null $taints
 * @property NodegroupResources|null $resources
 * @property int|null $diskSize
 * @property NodegroupHealth|null $health
 * @property NodegroupUpdateConfig|null $updateConfig
 * @property NodeRepairConfig|null $nodeRepairConfig
 * @property LaunchTemplateSpecification|null $launchTemplate
 * @property array<string, string>|null $tags
 */
class Nodegroup extends Shape
{
    /**
     * @param array{
     *     nodegroupName?: string|null,
     *     nodegroupArn?: string|null,
     *     clusterName?: string|null,
     *     version?: string|null,
     *     releaseVersion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'DEGRADED'|null,
     *     capacityType?: 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK'|null,
     *     scalingConfig?: NodegroupScalingConfig|null,
     *     instanceTypes?: list<string>|null,
     *     subnets?: list<string>|null,
     *     remoteAccess?: RemoteAccessConfig|null,
     *     amiType?: 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_FIPS'|'BOTTLEROCKET_x86_64_FIPS'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'BOTTLEROCKET_ARM_64_NVIDIA_FIPS'|'BOTTLEROCKET_x86_64_NVIDIA_FIPS'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'WINDOWS_CORE_2025_x86_64'|'WINDOWS_FULL_2025_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA'|'AL2023_ARM_64_NVIDIA'|null,
     *     nodeRole?: string|null,
     *     labels?: array<string, string>|null,
     *     taints?: list<Taint>|null,
     *     resources?: NodegroupResources|null,
     *     diskSize?: int|null,
     *     health?: NodegroupHealth|null,
     *     updateConfig?: NodegroupUpdateConfig|null,
     *     nodeRepairConfig?: NodeRepairConfig|null,
     *     launchTemplate?: LaunchTemplateSpecification|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
