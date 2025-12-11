<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetArn
 * @property list<InputColumn> $InputColumns
 */
class ParentDataSet extends Shape
{
    /**
     * @param array{
     *     DataSetArn: string,
     *     InputColumns: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
