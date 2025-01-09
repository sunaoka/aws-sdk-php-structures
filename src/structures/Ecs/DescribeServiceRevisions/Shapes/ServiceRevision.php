<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceRevisionArn
 * @property string $serviceArn
 * @property string $clusterArn
 * @property string $taskDefinition
 * @property list<CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property string $platformVersion
 * @property string $platformFamily
 * @property list<LoadBalancer> $loadBalancers
 * @property list<ServiceRegistry> $serviceRegistries
 * @property NetworkConfiguration $networkConfiguration
 * @property list<ContainerImage> $containerImages
 * @property bool $guardDutyEnabled
 * @property ServiceConnectConfiguration $serviceConnectConfiguration
 * @property list<ServiceVolumeConfiguration> $volumeConfigurations
 * @property DeploymentEphemeralStorage $fargateEphemeralStorage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<VpcLatticeConfiguration> $vpcLatticeConfigurations
 */
class ServiceRevision extends Shape
{
    /**
     * @param array{
     *     serviceRevisionArn?: string,
     *     serviceArn?: string,
     *     clusterArn?: string,
     *     taskDefinition?: string,
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     platformVersion?: string,
     *     platformFamily?: string,
     *     loadBalancers?: list<LoadBalancer>,
     *     serviceRegistries?: list<ServiceRegistry>,
     *     networkConfiguration?: NetworkConfiguration,
     *     containerImages?: list<ContainerImage>,
     *     guardDutyEnabled?: bool,
     *     serviceConnectConfiguration?: ServiceConnectConfiguration,
     *     volumeConfigurations?: list<ServiceVolumeConfiguration>,
     *     fargateEphemeralStorage?: DeploymentEphemeralStorage,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     vpcLatticeConfigurations?: list<VpcLatticeConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
