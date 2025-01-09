<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableCell> $Cells
 */
class TableRow extends Shape
{
    /**
     * @param array{Cells?: list<TableCell>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
