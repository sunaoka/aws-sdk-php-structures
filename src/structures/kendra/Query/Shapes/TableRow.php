<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableCell>|null $Cells
 */
class TableRow extends Shape
{
    /**
     * @param array{Cells?: list<TableCell>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
