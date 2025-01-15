<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnSchema>|null $ColumnSchemaList
 */
class DataSetSchema extends Shape
{
    /**
     * @param array{ColumnSchemaList?: list<ColumnSchema>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
