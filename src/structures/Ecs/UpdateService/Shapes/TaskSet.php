<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $taskSetArn
 * @property string|null $serviceArn
 * @property string|null $clusterArn
 * @property string|null $startedBy
 * @property string|null $externalId
 * @property string|null $status
 * @property string|null $taskDefinition
 * @property int|null $computedDesiredCount
 * @property int|null $pendingCount
 * @property int|null $runningCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null $launchType
 * @property list<CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property string|null $platformVersion
 * @property string|null $platformFamily
 * @property NetworkConfiguration|null $networkConfiguration
 * @property list<LoadBalancer>|null $loadBalancers
 * @property list<ServiceRegistry>|null $serviceRegistries
 * @property Scale|null $scale
 * @property 'STEADY_STATE'|'STABILIZING'|null $stabilityStatus
 * @property \Aws\Api\DateTimeResult|null $stabilityStatusAt
 * @property list<Tag>|null $tags
 * @property DeploymentEphemeralStorage|null $fargateEphemeralStorage
 */
class TaskSet extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     taskSetArn?: string|null,
     *     serviceArn?: string|null,
     *     clusterArn?: string|null,
     *     startedBy?: string|null,
     *     externalId?: string|null,
     *     status?: string|null,
     *     taskDefinition?: string|null,
     *     computedDesiredCount?: int|null,
     *     pendingCount?: int|null,
     *     runningCount?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null,
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     platformVersion?: string|null,
     *     platformFamily?: string|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     loadBalancers?: list<LoadBalancer>|null,
     *     serviceRegistries?: list<ServiceRegistry>|null,
     *     scale?: Scale|null,
     *     stabilityStatus?: 'STEADY_STATE'|'STABILIZING'|null,
     *     stabilityStatusAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<Tag>|null,
     *     fargateEphemeralStorage?: DeploymentEphemeralStorage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
