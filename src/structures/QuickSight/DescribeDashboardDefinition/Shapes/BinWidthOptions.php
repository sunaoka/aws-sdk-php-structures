<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property int<0, 1000> $BinCountLimit
 */
class BinWidthOptions extends Shape
{
    /**
     * @param array{
     *     Value?: double,
     *     BinCountLimit?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
