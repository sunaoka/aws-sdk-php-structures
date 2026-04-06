<?php

namespace Sunaoka\Aws\Structures\VPCLattice\RegisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property int<1, 65535>|null $port
 */
class TargetFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: string|null,
     *     failureMessage?: string|null,
     *     id?: string|null,
     *     port?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
