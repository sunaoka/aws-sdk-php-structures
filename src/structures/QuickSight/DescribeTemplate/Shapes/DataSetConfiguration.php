<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Placeholder
 * @property DataSetSchema|null $DataSetSchema
 * @property list<ColumnGroupSchema>|null $ColumnGroupSchemaList
 */
class DataSetConfiguration extends Shape
{
    /**
     * @param array{
     *     Placeholder?: string|null,
     *     DataSetSchema?: DataSetSchema|null,
     *     ColumnGroupSchemaList?: list<ColumnGroupSchema>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
