<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource|null $FirstSource
 * @property TransformOperationSource|null $SecondSource
 * @property list<AppendedColumn> $AppendedColumns
 */
class AppendOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     FirstSource?: TransformOperationSource|null,
     *     SecondSource?: TransformOperationSource|null,
     *     AppendedColumns: list<AppendedColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
