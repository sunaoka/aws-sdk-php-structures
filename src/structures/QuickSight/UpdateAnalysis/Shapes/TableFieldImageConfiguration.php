<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableCellImageSizingConfiguration $SizingOptions
 */
class TableFieldImageConfiguration extends Shape
{
    /**
     * @param array{SizingOptions?: TableCellImageSizingConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
