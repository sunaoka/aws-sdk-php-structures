<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERTICAL'|'HORIZONTAL'|null $Orientation
 * @property TableCellStyle|null $HeaderStyle
 * @property TableCellStyle|null $CellStyle
 * @property RowAlternateColorOptions|null $RowAlternateColorOptions
 */
class TableOptions extends Shape
{
    /**
     * @param array{
     *     Orientation?: 'VERTICAL'|'HORIZONTAL'|null,
     *     HeaderStyle?: TableCellStyle|null,
     *     CellStyle?: TableCellStyle|null,
     *     RowAlternateColorOptions?: RowAlternateColorOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
