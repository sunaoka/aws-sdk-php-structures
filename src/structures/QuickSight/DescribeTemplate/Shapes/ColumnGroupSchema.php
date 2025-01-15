<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<ColumnGroupColumnSchema>|null $ColumnGroupColumnSchemaList
 */
class ColumnGroupSchema extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ColumnGroupColumnSchemaList?: list<ColumnGroupColumnSchema>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
