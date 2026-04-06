<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterDaemonTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $family
 * @property string|null $taskRoleArn
 * @property string|null $executionRoleArn
 * @property list<Shapes\DaemonContainerDefinition> $containerDefinitions
 * @property string|null $cpu
 * @property string|null $memory
 * @property list<Shapes\DaemonVolume>|null $volumes
 * @property list<Shapes\Tag>|null $tags
 */
class RegisterDaemonTaskDefinitionRequest extends Request
{
    /**
     * @param array{
     *     family: string,
     *     taskRoleArn?: string|null,
     *     executionRoleArn?: string|null,
     *     containerDefinitions: list<Shapes\DaemonContainerDefinition>,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     volumes?: list<Shapes\DaemonVolume>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
