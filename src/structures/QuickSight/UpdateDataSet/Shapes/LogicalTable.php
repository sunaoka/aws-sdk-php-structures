<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property list<TransformOperation>|null $DataTransforms
 * @property LogicalTableSource $Source
 */
class LogicalTable extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     DataTransforms?: list<TransformOperation>|null,
     *     Source: LogicalTableSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
