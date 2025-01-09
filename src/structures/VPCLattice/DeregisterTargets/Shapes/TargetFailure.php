<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeregisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property int $port
 */
class TargetFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: string,
     *     failureMessage?: string,
     *     id?: string,
     *     port?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
