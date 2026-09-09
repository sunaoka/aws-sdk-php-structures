<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUSINESS_OUTCOME' $MetricType
 * @property string $MetricName
 */
class EvaluationFormMetricConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricType: 'BUSINESS_OUTCOME',
     *     MetricName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
