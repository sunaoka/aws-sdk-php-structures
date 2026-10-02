<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 */
class HierarchyFilterLevel extends Shape
{
    /**
     * @param array{Column: ColumnIdentifier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
