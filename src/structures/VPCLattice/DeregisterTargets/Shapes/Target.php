<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeregisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int<1, 65535>|null $port
 */
class Target extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     port?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
