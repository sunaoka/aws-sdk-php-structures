<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $family
 * @property string $taskRoleArn
 * @property string $executionRoleArn
 * @property 'bridge'|'host'|'awsvpc'|'none' $networkMode
 * @property list<Shapes\ContainerDefinition> $containerDefinitions
 * @property list<Shapes\Volume> $volumes
 * @property list<Shapes\TaskDefinitionPlacementConstraint> $placementConstraints
 * @property list<'EC2'|'FARGATE'|'EXTERNAL'> $requiresCompatibilities
 * @property string $cpu
 * @property string $memory
 * @property list<Shapes\Tag> $tags
 * @property 'host'|'task' $pidMode
 * @property 'host'|'task'|'none' $ipcMode
 * @property Shapes\ProxyConfiguration $proxyConfiguration
 * @property list<Shapes\InferenceAccelerator> $inferenceAccelerators
 * @property Shapes\EphemeralStorage $ephemeralStorage
 * @property Shapes\RuntimePlatform $runtimePlatform
 * @property bool $enableFaultInjection
 */
class RegisterTaskDefinitionRequest extends Request
{
    /**
     * @param array{
     *     family: string,
     *     taskRoleArn?: string,
     *     executionRoleArn?: string,
     *     networkMode?: 'bridge'|'host'|'awsvpc'|'none',
     *     containerDefinitions: list<Shapes\ContainerDefinition>,
     *     volumes?: list<Shapes\Volume>,
     *     placementConstraints?: list<Shapes\TaskDefinitionPlacementConstraint>,
     *     requiresCompatibilities?: list<'EC2'|'FARGATE'|'EXTERNAL'>,
     *     cpu?: string,
     *     memory?: string,
     *     tags?: list<Shapes\Tag>,
     *     pidMode?: 'host'|'task',
     *     ipcMode?: 'host'|'task'|'none',
     *     proxyConfiguration?: Shapes\ProxyConfiguration,
     *     inferenceAccelerators?: list<Shapes\InferenceAccelerator>,
     *     ephemeralStorage?: Shapes\EphemeralStorage,
     *     runtimePlatform?: Shapes\RuntimePlatform,
     *     enableFaultInjection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
