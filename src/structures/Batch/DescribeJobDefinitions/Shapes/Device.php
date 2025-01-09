<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostPath
 * @property string $containerPath
 * @property list<'READ'|'WRITE'|'MKNOD'> $permissions
 */
class Device extends Shape
{
    /**
     * @param array{
     *     hostPath: string,
     *     containerPath?: string,
     *     permissions?: list<'READ'|'WRITE'|'MKNOD'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
