<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $StatisticId
 * @property DataQualityMetricValues|null $MetricValues
 * @property list<string>|null $NewRules
 */
class MetricBasedObservation extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     StatisticId?: string|null,
     *     MetricValues?: DataQualityMetricValues|null,
     *     NewRules?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
