<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskDefinitionArn
 * @property list<ContainerDefinition>|null $containerDefinitions
 * @property string|null $family
 * @property string|null $taskRoleArn
 * @property string|null $executionRoleArn
 * @property 'bridge'|'host'|'awsvpc'|'none'|null $networkMode
 * @property int|null $revision
 * @property list<Volume>|null $volumes
 * @property 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS'|null $status
 * @property list<Attribute>|null $requiresAttributes
 * @property list<TaskDefinitionPlacementConstraint>|null $placementConstraints
 * @property list<'EC2'|'FARGATE'|'EXTERNAL'>|null $compatibilities
 * @property RuntimePlatform|null $runtimePlatform
 * @property list<'EC2'|'FARGATE'|'EXTERNAL'>|null $requiresCompatibilities
 * @property string|null $cpu
 * @property string|null $memory
 * @property list<InferenceAccelerator>|null $inferenceAccelerators
 * @property 'host'|'task'|null $pidMode
 * @property 'host'|'task'|'none'|null $ipcMode
 * @property ProxyConfiguration|null $proxyConfiguration
 * @property \Aws\Api\DateTimeResult|null $registeredAt
 * @property \Aws\Api\DateTimeResult|null $deregisteredAt
 * @property string|null $registeredBy
 * @property EphemeralStorage|null $ephemeralStorage
 * @property bool|null $enableFaultInjection
 */
class TaskDefinition extends Shape
{
    /**
     * @param array{
     *     taskDefinitionArn?: string|null,
     *     containerDefinitions?: list<ContainerDefinition>|null,
     *     family?: string|null,
     *     taskRoleArn?: string|null,
     *     executionRoleArn?: string|null,
     *     networkMode?: 'bridge'|'host'|'awsvpc'|'none'|null,
     *     revision?: int|null,
     *     volumes?: list<Volume>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS'|null,
     *     requiresAttributes?: list<Attribute>|null,
     *     placementConstraints?: list<TaskDefinitionPlacementConstraint>|null,
     *     compatibilities?: list<'EC2'|'FARGATE'|'EXTERNAL'>|null,
     *     runtimePlatform?: RuntimePlatform|null,
     *     requiresCompatibilities?: list<'EC2'|'FARGATE'|'EXTERNAL'>|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     inferenceAccelerators?: list<InferenceAccelerator>|null,
     *     pidMode?: 'host'|'task'|null,
     *     ipcMode?: 'host'|'task'|'none'|null,
     *     proxyConfiguration?: ProxyConfiguration|null,
     *     registeredAt?: \Aws\Api\DateTimeResult|null,
     *     deregisteredAt?: \Aws\Api\DateTimeResult|null,
     *     registeredBy?: string|null,
     *     ephemeralStorage?: EphemeralStorage|null,
     *     enableFaultInjection?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
