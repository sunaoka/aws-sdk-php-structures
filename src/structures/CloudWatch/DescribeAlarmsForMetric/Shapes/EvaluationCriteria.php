<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AlarmPromQLCriteria|null $PromQLCriteria
 */
class EvaluationCriteria extends Shape
{
    /**
     * @param array{PromQLCriteria?: AlarmPromQLCriteria|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
