<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputColumnName
 * @property string $Separator
 * @property bool $Distinct
 */
class DataPrepListAggregationFunction extends Shape
{
    /**
     * @param array{
     *     InputColumnName?: string|null,
     *     Separator: string,
     *     Distinct: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
