<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rowId
 * @property list<Cell> $cells
 */
class TableRow extends Shape
{
    /**
     * @param array{
     *     rowId: string,
     *     cells: list<Cell>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
