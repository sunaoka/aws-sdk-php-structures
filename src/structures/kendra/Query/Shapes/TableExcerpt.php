<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableRow> $Rows
 * @property int $TotalNumberOfRows
 */
class TableExcerpt extends Shape
{
    /**
     * @param array{
     *     Rows?: list<TableRow>,
     *     TotalNumberOfRows?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
