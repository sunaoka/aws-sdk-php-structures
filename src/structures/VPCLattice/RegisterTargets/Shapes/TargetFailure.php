<?php

namespace Sunaoka\Aws\Structures\VPCLattice\RegisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property int<1, 65535>|null $port
 * @property string|null $failureCode
 * @property string|null $failureMessage
 */
class TargetFailure extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     port?: int<1, 65535>|null,
     *     failureCode?: string|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
