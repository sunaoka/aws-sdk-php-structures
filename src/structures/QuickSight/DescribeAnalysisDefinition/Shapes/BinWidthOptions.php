<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Value
 * @property int<0, 1000>|null $BinCountLimit
 */
class BinWidthOptions extends Shape
{
    /**
     * @param array{
     *     Value?: double|null,
     *     BinCountLimit?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
