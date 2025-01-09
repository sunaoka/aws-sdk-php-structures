<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property list<ColumnTag> $Tags
 */
class TagColumnOperation extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     Tags: list<ColumnTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
