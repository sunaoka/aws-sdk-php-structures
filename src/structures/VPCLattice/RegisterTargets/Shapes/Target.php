<?php

namespace Sunaoka\Aws\Structures\VPCLattice\RegisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int<1, 65535> $port
 */
class Target extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     port?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
