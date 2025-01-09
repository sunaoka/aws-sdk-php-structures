<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringDatasetParameter $StringDatasetParameter
 * @property DecimalDatasetParameter $DecimalDatasetParameter
 * @property IntegerDatasetParameter $IntegerDatasetParameter
 * @property DateTimeDatasetParameter $DateTimeDatasetParameter
 */
class DatasetParameter extends Shape
{
    /**
     * @param array{
     *     StringDatasetParameter?: StringDatasetParameter,
     *     DecimalDatasetParameter?: DecimalDatasetParameter,
     *     IntegerDatasetParameter?: IntegerDatasetParameter,
     *     DateTimeDatasetParameter?: DateTimeDatasetParameter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
