<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIT_TO_CELL_HEIGHT'|'FIT_TO_CELL_WIDTH'|'DO_NOT_SCALE' $TableCellImageScalingConfiguration
 */
class TableCellImageSizingConfiguration extends Shape
{
    /**
     * @param array{TableCellImageScalingConfiguration?: 'FIT_TO_CELL_HEIGHT'|'FIT_TO_CELL_WIDTH'|'DO_NOT_SCALE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
