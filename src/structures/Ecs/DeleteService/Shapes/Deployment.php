<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $status
 * @property string|null $taskDefinition
 * @property int|null $desiredCount
 * @property int|null $pendingCount
 * @property int|null $runningCount
 * @property int|null $failedTasks
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null $launchType
 * @property string|null $platformVersion
 * @property string|null $platformFamily
 * @property NetworkConfiguration|null $networkConfiguration
 * @property 'COMPLETED'|'FAILED'|'IN_PROGRESS'|null $rolloutState
 * @property string|null $rolloutStateReason
 * @property ServiceConnectConfiguration|null $serviceConnectConfiguration
 * @property list<ServiceConnectServiceResource>|null $serviceConnectResources
 * @property list<ServiceVolumeConfiguration>|null $volumeConfigurations
 * @property DeploymentEphemeralStorage|null $fargateEphemeralStorage
 * @property list<VpcLatticeConfiguration>|null $vpcLatticeConfigurations
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     status?: string|null,
     *     taskDefinition?: string|null,
     *     desiredCount?: int|null,
     *     pendingCount?: int|null,
     *     runningCount?: int|null,
     *     failedTasks?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null,
     *     platformVersion?: string|null,
     *     platformFamily?: string|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     rolloutState?: 'COMPLETED'|'FAILED'|'IN_PROGRESS'|null,
     *     rolloutStateReason?: string|null,
     *     serviceConnectConfiguration?: ServiceConnectConfiguration|null,
     *     serviceConnectResources?: list<ServiceConnectServiceResource>|null,
     *     volumeConfigurations?: list<ServiceVolumeConfiguration>|null,
     *     fargateEphemeralStorage?: DeploymentEphemeralStorage|null,
     *     vpcLatticeConfigurations?: list<VpcLatticeConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
