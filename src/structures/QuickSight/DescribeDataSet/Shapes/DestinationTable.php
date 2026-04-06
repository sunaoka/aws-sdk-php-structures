<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property DestinationTableSource $Source
 */
class DestinationTable extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: DestinationTableSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
