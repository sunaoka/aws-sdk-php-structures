<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableFieldCollapseStateTarget $Target
 * @property 'COLLAPSED'|'EXPANDED'|null $State
 */
class PivotTableFieldCollapseStateOption extends Shape
{
    /**
     * @param array{
     *     Target: PivotTableFieldCollapseStateTarget,
     *     State?: 'COLLAPSED'|'EXPANDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
