<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERTICAL'|'HORIZONTAL' $Orientation
 * @property TableCellStyle $HeaderStyle
 * @property TableCellStyle $CellStyle
 * @property RowAlternateColorOptions $RowAlternateColorOptions
 */
class TableOptions extends Shape
{
    /**
     * @param array{
     *     Orientation?: 'VERTICAL'|'HORIZONTAL',
     *     HeaderStyle?: TableCellStyle,
     *     CellStyle?: TableCellStyle,
     *     RowAlternateColorOptions?: RowAlternateColorOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
