<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostPath
 * @property string $containerPath
 * @property list<'read'|'write'|'mknod'> $permissions
 */
class Device extends Shape
{
    /**
     * @param array{
     *     hostPath: string,
     *     containerPath?: string,
     *     permissions?: list<'read'|'write'|'mknod'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
