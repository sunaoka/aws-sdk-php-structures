<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CoreCount
 * @property int|null $ThreadsPerCore
 * @property 'enabled'|'disabled'|null $AmdSevSnp
 * @property 'enabled'|'disabled'|null $NestedVirtualization
 */
class CpuOptions extends Shape
{
    /**
     * @param array{
     *     CoreCount?: int|null,
     *     ThreadsPerCore?: int|null,
     *     AmdSevSnp?: 'enabled'|'disabled'|null,
     *     NestedVirtualization?: 'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
