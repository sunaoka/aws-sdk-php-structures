<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Step> $steps
 */
class ParallelExecutionBlockConfiguration extends Shape
{
    /**
     * @param array{steps: list<Step>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
