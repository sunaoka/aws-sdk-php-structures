<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $StatisticId
 * @property DataQualityMetricValues $MetricValues
 * @property list<string> $NewRules
 */
class MetricBasedObservation extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     StatisticId?: string,
     *     MetricValues?: DataQualityMetricValues,
     *     NewRules?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
