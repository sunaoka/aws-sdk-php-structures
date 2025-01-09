<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskDefinitionArn
 * @property list<ContainerDefinition> $containerDefinitions
 * @property string $family
 * @property string $taskRoleArn
 * @property string $executionRoleArn
 * @property 'bridge'|'host'|'awsvpc'|'none' $networkMode
 * @property int $revision
 * @property list<Volume> $volumes
 * @property 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS' $status
 * @property list<Attribute> $requiresAttributes
 * @property list<TaskDefinitionPlacementConstraint> $placementConstraints
 * @property list<'EC2'|'FARGATE'|'EXTERNAL'> $compatibilities
 * @property RuntimePlatform $runtimePlatform
 * @property list<'EC2'|'FARGATE'|'EXTERNAL'> $requiresCompatibilities
 * @property string $cpu
 * @property string $memory
 * @property list<InferenceAccelerator> $inferenceAccelerators
 * @property 'host'|'task' $pidMode
 * @property 'host'|'task'|'none' $ipcMode
 * @property ProxyConfiguration $proxyConfiguration
 * @property \Aws\Api\DateTimeResult $registeredAt
 * @property \Aws\Api\DateTimeResult $deregisteredAt
 * @property string $registeredBy
 * @property EphemeralStorage $ephemeralStorage
 * @property bool $enableFaultInjection
 */
class TaskDefinition extends Shape
{
    /**
     * @param array{
     *     taskDefinitionArn?: string,
     *     containerDefinitions?: list<ContainerDefinition>,
     *     family?: string,
     *     taskRoleArn?: string,
     *     executionRoleArn?: string,
     *     networkMode?: 'bridge'|'host'|'awsvpc'|'none',
     *     revision?: int,
     *     volumes?: list<Volume>,
     *     status?: 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS',
     *     requiresAttributes?: list<Attribute>,
     *     placementConstraints?: list<TaskDefinitionPlacementConstraint>,
     *     compatibilities?: list<'EC2'|'FARGATE'|'EXTERNAL'>,
     *     runtimePlatform?: RuntimePlatform,
     *     requiresCompatibilities?: list<'EC2'|'FARGATE'|'EXTERNAL'>,
     *     cpu?: string,
     *     memory?: string,
     *     inferenceAccelerators?: list<InferenceAccelerator>,
     *     pidMode?: 'host'|'task',
     *     ipcMode?: 'host'|'task'|'none',
     *     proxyConfiguration?: ProxyConfiguration,
     *     registeredAt?: \Aws\Api\DateTimeResult,
     *     deregisteredAt?: \Aws\Api\DateTimeResult,
     *     registeredBy?: string,
     *     ephemeralStorage?: EphemeralStorage,
     *     enableFaultInjection?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
