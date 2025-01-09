<?php

namespace Sunaoka\Aws\Structures\VPCLattice\RegisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int $port
 */
class Target extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     port?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
