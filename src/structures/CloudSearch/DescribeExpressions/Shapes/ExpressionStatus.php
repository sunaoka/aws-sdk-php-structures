<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeExpressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Expression $Options
 * @property OptionStatus $Status
 */
class ExpressionStatus extends Shape
{
    /**
     * @param array{
     *     Options: Expression,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
