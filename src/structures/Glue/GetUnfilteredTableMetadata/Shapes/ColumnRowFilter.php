<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property string|null $RowFilterExpression
 */
class ColumnRowFilter extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     RowFilterExpression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
