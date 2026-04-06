<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceArn
 * @property string|null $serviceName
 * @property string|null $clusterArn
 * @property list<LoadBalancer>|null $loadBalancers
 * @property list<ServiceRegistry>|null $serviceRegistries
 * @property string|null $status
 * @property int|null $desiredCount
 * @property int|null $runningCount
 * @property int|null $pendingCount
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $launchType
 * @property list<CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property string|null $platformVersion
 * @property string|null $platformFamily
 * @property string|null $taskDefinition
 * @property DeploymentConfiguration|null $deploymentConfiguration
 * @property list<TaskSet>|null $taskSets
 * @property list<Deployment>|null $deployments
 * @property string|null $roleArn
 * @property list<ServiceEvent>|null $events
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<PlacementConstraint>|null $placementConstraints
 * @property list<PlacementStrategy>|null $placementStrategy
 * @property NetworkConfiguration|null $networkConfiguration
 * @property int|null $healthCheckGracePeriodSeconds
 * @property 'REPLICA'|'DAEMON'|null $schedulingStrategy
 * @property DeploymentController|null $deploymentController
 * @property list<Tag>|null $tags
 * @property string|null $createdBy
 * @property bool|null $enableECSManagedTags
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE'|null $propagateTags
 * @property bool|null $enableExecuteCommand
 * @property 'ENABLED'|'DISABLED'|null $availabilityZoneRebalancing
 */
class Service extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     serviceName?: string|null,
     *     clusterArn?: string|null,
     *     loadBalancers?: list<LoadBalancer>|null,
     *     serviceRegistries?: list<ServiceRegistry>|null,
     *     status?: string|null,
     *     desiredCount?: int|null,
     *     runningCount?: int|null,
     *     pendingCount?: int|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     platformVersion?: string|null,
     *     platformFamily?: string|null,
     *     taskDefinition?: string|null,
     *     deploymentConfiguration?: DeploymentConfiguration|null,
     *     taskSets?: list<TaskSet>|null,
     *     deployments?: list<Deployment>|null,
     *     roleArn?: string|null,
     *     events?: list<ServiceEvent>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     placementConstraints?: list<PlacementConstraint>|null,
     *     placementStrategy?: list<PlacementStrategy>|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     healthCheckGracePeriodSeconds?: int|null,
     *     schedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     deploymentController?: DeploymentController|null,
     *     tags?: list<Tag>|null,
     *     createdBy?: string|null,
     *     enableECSManagedTags?: bool|null,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'|null,
     *     enableExecuteCommand?: bool|null,
     *     availabilityZoneRebalancing?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
