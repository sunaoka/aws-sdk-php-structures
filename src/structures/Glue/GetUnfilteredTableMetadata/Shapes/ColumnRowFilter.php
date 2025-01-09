<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $RowFilterExpression
 */
class ColumnRowFilter extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string,
     *     RowFilterExpression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
