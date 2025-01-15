<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableCellImageSizingConfiguration|null $SizingOptions
 */
class TableFieldImageConfiguration extends Shape
{
    /**
     * @param array{SizingOptions?: TableCellImageSizingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
