<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 */
class ColumnDescription extends Shape
{
    /**
     * @param array{Text?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
