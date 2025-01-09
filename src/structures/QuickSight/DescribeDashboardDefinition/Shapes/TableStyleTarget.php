<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOTAL'|'METRIC_HEADER'|'VALUE' $CellType
 */
class TableStyleTarget extends Shape
{
    /**
     * @param array{CellType: 'TOTAL'|'METRIC_HEADER'|'VALUE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
