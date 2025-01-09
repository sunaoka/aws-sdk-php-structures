<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $taskSetArn
 * @property string $serviceArn
 * @property string $clusterArn
 * @property string $startedBy
 * @property string $externalId
 * @property string $status
 * @property string $taskDefinition
 * @property int $computedDesiredCount
 * @property int $pendingCount
 * @property int $runningCount
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property list<CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property string $platformVersion
 * @property string $platformFamily
 * @property NetworkConfiguration $networkConfiguration
 * @property list<LoadBalancer> $loadBalancers
 * @property list<ServiceRegistry> $serviceRegistries
 * @property Scale $scale
 * @property 'STEADY_STATE'|'STABILIZING' $stabilityStatus
 * @property \Aws\Api\DateTimeResult $stabilityStatusAt
 * @property list<Tag> $tags
 * @property DeploymentEphemeralStorage $fargateEphemeralStorage
 */
class TaskSet extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     taskSetArn?: string,
     *     serviceArn?: string,
     *     clusterArn?: string,
     *     startedBy?: string,
     *     externalId?: string,
     *     status?: string,
     *     taskDefinition?: string,
     *     computedDesiredCount?: int,
     *     pendingCount?: int,
     *     runningCount?: int,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     capacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     platformVersion?: string,
     *     platformFamily?: string,
     *     networkConfiguration?: NetworkConfiguration,
     *     loadBalancers?: list<LoadBalancer>,
     *     serviceRegistries?: list<ServiceRegistry>,
     *     scale?: Scale,
     *     stabilityStatus?: 'STEADY_STATE'|'STABILIZING',
     *     stabilityStatusAt?: \Aws\Api\DateTimeResult,
     *     tags?: list<Tag>,
     *     fargateEphemeralStorage?: DeploymentEphemeralStorage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
