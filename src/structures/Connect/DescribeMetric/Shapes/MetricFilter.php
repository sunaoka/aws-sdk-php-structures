<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricFilterKey
 * @property bool|null $Negate
 * @property MetricFilterNumberCondition|null $NumberCondition
 * @property MetricFilterStringCondition|null $StringCondition
 * @property MetricFilterBooleanCondition|null $BooleanCondition
 */
class MetricFilter extends Shape
{
    /**
     * @param array{
     *     MetricFilterKey: string,
     *     Negate?: bool|null,
     *     NumberCondition?: MetricFilterNumberCondition|null,
     *     StringCondition?: MetricFilterStringCondition|null,
     *     BooleanCondition?: MetricFilterBooleanCondition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
