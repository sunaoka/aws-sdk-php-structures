<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostPath
 * @property string|null $containerPath
 * @property list<'READ'|'WRITE'|'MKNOD'>|null $permissions
 */
class Device extends Shape
{
    /**
     * @param array{
     *     hostPath: string,
     *     containerPath?: string|null,
     *     permissions?: list<'READ'|'WRITE'|'MKNOD'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
