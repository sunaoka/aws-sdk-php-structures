<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhysicalTableId
 * @property ParentDataSet|null $DataSet
 */
class SourceTable extends Shape
{
    /**
     * @param array{
     *     PhysicalTableId?: string|null,
     *     DataSet?: ParentDataSet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
