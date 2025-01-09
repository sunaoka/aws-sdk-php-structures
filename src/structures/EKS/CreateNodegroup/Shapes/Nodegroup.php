<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodegroupName
 * @property string $nodegroupArn
 * @property string $clusterName
 * @property string $version
 * @property string $releaseVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'DEGRADED' $status
 * @property 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK' $capacityType
 * @property NodegroupScalingConfig $scalingConfig
 * @property list<string> $instanceTypes
 * @property list<string> $subnets
 * @property RemoteAccessConfig $remoteAccess
 * @property 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA' $amiType
 * @property string $nodeRole
 * @property array<string, string> $labels
 * @property list<Taint> $taints
 * @property NodegroupResources $resources
 * @property int $diskSize
 * @property NodegroupHealth $health
 * @property NodegroupUpdateConfig $updateConfig
 * @property NodeRepairConfig $nodeRepairConfig
 * @property LaunchTemplateSpecification $launchTemplate
 * @property array<string, string> $tags
 */
class Nodegroup extends Shape
{
    /**
     * @param array{
     *     nodegroupName?: string,
     *     nodegroupArn?: string,
     *     clusterName?: string,
     *     version?: string,
     *     releaseVersion?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'DEGRADED',
     *     capacityType?: 'ON_DEMAND'|'SPOT'|'CAPACITY_BLOCK',
     *     scalingConfig?: NodegroupScalingConfig,
     *     instanceTypes?: list<string>,
     *     subnets?: list<string>,
     *     remoteAccess?: RemoteAccessConfig,
     *     amiType?: 'AL2_x86_64'|'AL2_x86_64_GPU'|'AL2_ARM_64'|'CUSTOM'|'BOTTLEROCKET_ARM_64'|'BOTTLEROCKET_x86_64'|'BOTTLEROCKET_ARM_64_NVIDIA'|'BOTTLEROCKET_x86_64_NVIDIA'|'WINDOWS_CORE_2019_x86_64'|'WINDOWS_FULL_2019_x86_64'|'WINDOWS_CORE_2022_x86_64'|'WINDOWS_FULL_2022_x86_64'|'AL2023_x86_64_STANDARD'|'AL2023_ARM_64_STANDARD'|'AL2023_x86_64_NEURON'|'AL2023_x86_64_NVIDIA',
     *     nodeRole?: string,
     *     labels?: array<string, string>,
     *     taints?: list<Taint>,
     *     resources?: NodegroupResources,
     *     diskSize?: int,
     *     health?: NodegroupHealth,
     *     updateConfig?: NodegroupUpdateConfig,
     *     nodeRepairConfig?: NodeRepairConfig,
     *     launchTemplate?: LaunchTemplateSpecification,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
