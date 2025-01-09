<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<ColumnGroupColumnSchema> $ColumnGroupColumnSchemaList
 */
class ColumnGroupSchema extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ColumnGroupColumnSchemaList?: list<ColumnGroupColumnSchema>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
