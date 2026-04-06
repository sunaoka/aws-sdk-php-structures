<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConditionExpression
 */
class FilterOperation extends Shape
{
    /**
     * @param array{ConditionExpression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
