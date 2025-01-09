<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetRegion
 */
class CrossRegionCopyTarget extends Shape
{
    /**
     * @param array{TargetRegion?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
