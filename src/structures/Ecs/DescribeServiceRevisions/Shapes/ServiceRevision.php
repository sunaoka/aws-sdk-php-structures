<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceRevisionArn
 * @property string|null $serviceArn
 * @property string|null $clusterArn
 * @property string|null $taskDefinition
 * @property list<CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $launchType
 * @property string|null $platformVersion
 * @property string|null $platformFamily
 * @property list<LoadBalancer>|null $loadBalancers
 * @property list<ServiceRegistry>|null $serviceRegistries
 * @property NetworkConfiguration|null $networkConfiguration
 * @property list<ContainerImage>|null $containerImages
 * @property bool|null $guardDutyEnabled
 * @property ServiceConnectConfiguration|null $serviceConnectConfiguration
 * @property list<ServiceVolumeConfiguration>|null $volumeConfigurations
 * @property DeploymentEphemeralStorage|null $fargateEphemeralStorage
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<VpcLatticeConfiguration>|null $vpcLatticeConfigurations
 */
class ServiceRevision extends Shape
{
    /**
     * @param array{
     *     serviceRevisionArn?: string|null,
     *     serviceArn?: string|null,
     *     clusterArn?: string|null,
     *     taskDefinition?: string|null,
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     platformVersion?: string|null,
     *     platformFamily?: string|null,
     *     loadBalancers?: list<LoadBalancer>|null,
     *     serviceRegistries?: list<ServiceRegistry>|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     containerImages?: list<ContainerImage>|null,
     *     guardDutyEnabled?: bool|null,
     *     serviceConnectConfiguration?: ServiceConnectConfiguration|null,
     *     volumeConfigurations?: list<ServiceVolumeConfiguration>|null,
     *     fargateEphemeralStorage?: DeploymentEphemeralStorage|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     vpcLatticeConfigurations?: list<VpcLatticeConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
