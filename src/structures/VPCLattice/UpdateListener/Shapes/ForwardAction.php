<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WeightedTargetGroup> $targetGroups
 */
class ForwardAction extends Shape
{
    /**
     * @param array{targetGroups: list<WeightedTargetGroup>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
