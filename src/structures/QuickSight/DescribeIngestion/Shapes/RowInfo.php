<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIngestion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RowsIngested
 * @property int|null $RowsDropped
 * @property int|null $TotalRowsInDataset
 */
class RowInfo extends Shape
{
    /**
     * @param array{
     *     RowsIngested?: int|null,
     *     RowsDropped?: int|null,
     *     TotalRowsInDataset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
