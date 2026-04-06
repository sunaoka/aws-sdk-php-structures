<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $AmdSevSnp
 * @property int<0, max>|null $CoreCount
 * @property int<0, max>|null $ThreadsPerCore
 */
class CpuOptionsRequest extends Shape
{
    /**
     * @param array{
     *     AmdSevSnp?: 'enabled'|'disabled'|null,
     *     CoreCount?: int<0, max>|null,
     *     ThreadsPerCore?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
