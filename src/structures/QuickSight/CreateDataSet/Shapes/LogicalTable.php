<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property list<TransformOperation> $DataTransforms
 * @property LogicalTableSource $Source
 */
class LogicalTable extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     DataTransforms?: list<TransformOperation>,
     *     Source: LogicalTableSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
