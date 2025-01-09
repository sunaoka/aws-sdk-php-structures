<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property int $BinCountLimit
 */
class BinWidthOptions extends Shape
{
    /**
     * @param array{
     *     Value?: double,
     *     BinCountLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
