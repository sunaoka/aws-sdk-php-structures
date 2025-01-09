<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableFieldCollapseStateTarget $Target
 * @property 'COLLAPSED'|'EXPANDED' $State
 */
class PivotTableFieldCollapseStateOption extends Shape
{
    /**
     * @param array{
     *     Target: PivotTableFieldCollapseStateTarget,
     *     State?: 'COLLAPSED'|'EXPANDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
