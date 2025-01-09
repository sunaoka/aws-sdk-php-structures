<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeregisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property int<1, 65535> $port
 */
class TargetFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: string,
     *     failureMessage?: string,
     *     id?: string,
     *     port?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
