<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetGroupIdentifier
 * @property int<0, 999> $weight
 */
class WeightedTargetGroup extends Shape
{
    /**
     * @param array{
     *     targetGroupIdentifier: string,
     *     weight?: int<0, 999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
