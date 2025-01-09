<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetGroupIdentifier
 * @property int $weight
 */
class WeightedTargetGroup extends Shape
{
    /**
     * @param array{
     *     targetGroupIdentifier: string,
     *     weight?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
