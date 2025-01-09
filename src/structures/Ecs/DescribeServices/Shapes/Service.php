<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceArn
 * @property string $serviceName
 * @property string $clusterArn
 * @property list<LoadBalancer> $loadBalancers
 * @property list<ServiceRegistry> $serviceRegistries
 * @property string $status
 * @property int $desiredCount
 * @property int $runningCount
 * @property int $pendingCount
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property list<CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property string $platformVersion
 * @property string $platformFamily
 * @property string $taskDefinition
 * @property DeploymentConfiguration $deploymentConfiguration
 * @property list<TaskSet> $taskSets
 * @property list<Deployment> $deployments
 * @property string $roleArn
 * @property list<ServiceEvent> $events
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<PlacementConstraint> $placementConstraints
 * @property list<PlacementStrategy> $placementStrategy
 * @property NetworkConfiguration $networkConfiguration
 * @property int $healthCheckGracePeriodSeconds
 * @property 'REPLICA'|'DAEMON' $schedulingStrategy
 * @property DeploymentController $deploymentController
 * @property list<Tag> $tags
 * @property string $createdBy
 * @property bool $enableECSManagedTags
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE' $propagateTags
 * @property bool $enableExecuteCommand
 * @property 'ENABLED'|'DISABLED' $availabilityZoneRebalancing
 */
class Service extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string,
     *     serviceName?: string,
     *     clusterArn?: string,
     *     loadBalancers?: list<LoadBalancer>,
     *     serviceRegistries?: list<ServiceRegistry>,
     *     status?: string,
     *     desiredCount?: int,
     *     runningCount?: int,
     *     pendingCount?: int,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     platformVersion?: string,
     *     platformFamily?: string,
     *     taskDefinition?: string,
     *     deploymentConfiguration?: DeploymentConfiguration,
     *     taskSets?: list<TaskSet>,
     *     deployments?: list<Deployment>,
     *     roleArn?: string,
     *     events?: list<ServiceEvent>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     placementConstraints?: list<PlacementConstraint>,
     *     placementStrategy?: list<PlacementStrategy>,
     *     networkConfiguration?: NetworkConfiguration,
     *     healthCheckGracePeriodSeconds?: int,
     *     schedulingStrategy?: 'REPLICA'|'DAEMON',
     *     deploymentController?: DeploymentController,
     *     tags?: list<Tag>,
     *     createdBy?: string,
     *     enableECSManagedTags?: bool,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE',
     *     enableExecuteCommand?: bool,
     *     availabilityZoneRebalancing?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
