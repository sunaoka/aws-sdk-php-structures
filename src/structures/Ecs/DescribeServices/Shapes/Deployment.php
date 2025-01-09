<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $status
 * @property string $taskDefinition
 * @property int $desiredCount
 * @property int $pendingCount
 * @property int $runningCount
 * @property int $failedTasks
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property string $platformVersion
 * @property string $platformFamily
 * @property NetworkConfiguration $networkConfiguration
 * @property 'COMPLETED'|'FAILED'|'IN_PROGRESS' $rolloutState
 * @property string $rolloutStateReason
 * @property ServiceConnectConfiguration $serviceConnectConfiguration
 * @property list<ServiceConnectServiceResource> $serviceConnectResources
 * @property list<ServiceVolumeConfiguration> $volumeConfigurations
 * @property DeploymentEphemeralStorage $fargateEphemeralStorage
 * @property list<VpcLatticeConfiguration> $vpcLatticeConfigurations
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     status?: string,
     *     taskDefinition?: string,
     *     desiredCount?: int,
     *     pendingCount?: int,
     *     runningCount?: int,
     *     failedTasks?: int,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     platformVersion?: string,
     *     platformFamily?: string,
     *     networkConfiguration?: NetworkConfiguration,
     *     rolloutState?: 'COMPLETED'|'FAILED'|'IN_PROGRESS',
     *     rolloutStateReason?: string,
     *     serviceConnectConfiguration?: ServiceConnectConfiguration,
     *     serviceConnectResources?: list<ServiceConnectServiceResource>,
     *     volumeConfigurations?: list<ServiceVolumeConfiguration>,
     *     fargateEphemeralStorage?: DeploymentEphemeralStorage,
     *     vpcLatticeConfigurations?: list<VpcLatticeConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
