<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnSchema> $ColumnSchemaList
 */
class DataSetSchema extends Shape
{
    /**
     * @param array{ColumnSchemaList?: list<ColumnSchema>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
