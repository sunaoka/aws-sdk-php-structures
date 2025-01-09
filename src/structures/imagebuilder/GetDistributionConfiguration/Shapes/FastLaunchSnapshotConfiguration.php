<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $targetResourceCount
 */
class FastLaunchSnapshotConfiguration extends Shape
{
    /**
     * @param array{targetResourceCount?: int<1, 10000>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
