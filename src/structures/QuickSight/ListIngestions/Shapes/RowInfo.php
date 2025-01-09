<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIngestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RowsIngested
 * @property int $RowsDropped
 * @property int $TotalRowsInDataset
 */
class RowInfo extends Shape
{
    /**
     * @param array{
     *     RowsIngested?: int,
     *     RowsDropped?: int,
     *     TotalRowsInDataset?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
