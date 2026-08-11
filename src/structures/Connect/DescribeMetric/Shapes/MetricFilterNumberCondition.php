<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LESSER'|'LESSER_OR_EQUAL'|'GREATER'|'GREATER_OR_EQUAL' $Comparison
 * @property list<double> $Values
 */
class MetricFilterNumberCondition extends Shape
{
    /**
     * @param array{
     *     Comparison: 'LESSER'|'LESSER_OR_EQUAL'|'GREATER'|'GREATER_OR_EQUAL',
     *     Values: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
