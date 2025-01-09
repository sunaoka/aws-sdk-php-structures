<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $targetResourceCount
 */
class FastLaunchSnapshotConfiguration extends Shape
{
    /**
     * @param array{targetResourceCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
