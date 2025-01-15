<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property string|null $MetricName
 * @property list<Dimension>|null $Dimensions
 * @property string|null $Stat
 * @property AnomalyDetectorConfiguration|null $Configuration
 * @property 'PENDING_TRAINING'|'TRAINED_INSUFFICIENT_DATA'|'TRAINED'|null $StateValue
 * @property MetricCharacteristics|null $MetricCharacteristics
 * @property SingleMetricAnomalyDetector|null $SingleMetricAnomalyDetector
 * @property MetricMathAnomalyDetector|null $MetricMathAnomalyDetector
 */
class AnomalyDetector extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     MetricName?: string|null,
     *     Dimensions?: list<Dimension>|null,
     *     Stat?: string|null,
     *     Configuration?: AnomalyDetectorConfiguration|null,
     *     StateValue?: 'PENDING_TRAINING'|'TRAINED_INSUFFICIENT_DATA'|'TRAINED'|null,
     *     MetricCharacteristics?: MetricCharacteristics|null,
     *     SingleMetricAnomalyDetector?: SingleMetricAnomalyDetector|null,
     *     MetricMathAnomalyDetector?: MetricMathAnomalyDetector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
