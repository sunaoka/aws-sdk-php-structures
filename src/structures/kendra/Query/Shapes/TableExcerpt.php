<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableRow>|null $Rows
 * @property int|null $TotalNumberOfRows
 */
class TableExcerpt extends Shape
{
    /**
     * @param array{
     *     Rows?: list<TableRow>|null,
     *     TotalNumberOfRows?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
