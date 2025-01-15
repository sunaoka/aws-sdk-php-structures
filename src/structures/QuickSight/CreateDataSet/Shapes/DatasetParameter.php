<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringDatasetParameter|null $StringDatasetParameter
 * @property DecimalDatasetParameter|null $DecimalDatasetParameter
 * @property IntegerDatasetParameter|null $IntegerDatasetParameter
 * @property DateTimeDatasetParameter|null $DateTimeDatasetParameter
 */
class DatasetParameter extends Shape
{
    /**
     * @param array{
     *     StringDatasetParameter?: StringDatasetParameter|null,
     *     DecimalDatasetParameter?: DecimalDatasetParameter|null,
     *     IntegerDatasetParameter?: IntegerDatasetParameter|null,
     *     DateTimeDatasetParameter?: DateTimeDatasetParameter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
