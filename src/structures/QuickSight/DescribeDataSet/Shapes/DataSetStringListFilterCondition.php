<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE' $Operator
 * @property DataSetStringListFilterValue|null $Values
 */
class DataSetStringListFilterCondition extends Shape
{
    /**
     * @param array{
     *     Operator: 'INCLUDE'|'EXCLUDE',
     *     Values?: DataSetStringListFilterValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
