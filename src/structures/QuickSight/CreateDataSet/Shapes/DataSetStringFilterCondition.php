<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property DataSetStringComparisonFilterCondition|null $ComparisonFilterCondition
 * @property DataSetStringListFilterCondition|null $ListFilterCondition
 */
class DataSetStringFilterCondition extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     ComparisonFilterCondition?: DataSetStringComparisonFilterCondition|null,
     *     ListFilterCondition?: DataSetStringListFilterCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
