<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $family
 * @property string|null $taskRoleArn
 * @property string|null $executionRoleArn
 * @property 'bridge'|'host'|'awsvpc'|'none'|null $networkMode
 * @property list<Shapes\ContainerDefinition> $containerDefinitions
 * @property list<Shapes\Volume>|null $volumes
 * @property list<Shapes\TaskDefinitionPlacementConstraint>|null $placementConstraints
 * @property list<'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'>|null $requiresCompatibilities
 * @property string|null $cpu
 * @property string|null $memory
 * @property list<Shapes\Tag>|null $tags
 * @property 'host'|'task'|null $pidMode
 * @property 'host'|'task'|'none'|null $ipcMode
 * @property Shapes\ProxyConfiguration|null $proxyConfiguration
 * @property list<Shapes\InferenceAccelerator>|null $inferenceAccelerators
 * @property Shapes\EphemeralStorage|null $ephemeralStorage
 * @property Shapes\RuntimePlatform|null $runtimePlatform
 * @property bool|null $enableFaultInjection
 */
class RegisterTaskDefinitionRequest extends Request
{
    /**
     * @param array{
     *     family: string,
     *     taskRoleArn?: string|null,
     *     executionRoleArn?: string|null,
     *     networkMode?: 'bridge'|'host'|'awsvpc'|'none'|null,
     *     containerDefinitions: list<Shapes\ContainerDefinition>,
     *     volumes?: list<Shapes\Volume>|null,
     *     placementConstraints?: list<Shapes\TaskDefinitionPlacementConstraint>|null,
     *     requiresCompatibilities?: list<'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'>|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     pidMode?: 'host'|'task'|null,
     *     ipcMode?: 'host'|'task'|'none'|null,
     *     proxyConfiguration?: Shapes\ProxyConfiguration|null,
     *     inferenceAccelerators?: list<Shapes\InferenceAccelerator>|null,
     *     ephemeralStorage?: Shapes\EphemeralStorage|null,
     *     runtimePlatform?: Shapes\RuntimePlatform|null,
     *     enableFaultInjection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
