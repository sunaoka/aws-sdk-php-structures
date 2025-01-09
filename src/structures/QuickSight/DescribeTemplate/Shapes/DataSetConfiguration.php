<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Placeholder
 * @property DataSetSchema $DataSetSchema
 * @property list<ColumnGroupSchema> $ColumnGroupSchemaList
 */
class DataSetConfiguration extends Shape
{
    /**
     * @param array{
     *     Placeholder?: string,
     *     DataSetSchema?: DataSetSchema,
     *     ColumnGroupSchemaList?: list<ColumnGroupSchema>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
