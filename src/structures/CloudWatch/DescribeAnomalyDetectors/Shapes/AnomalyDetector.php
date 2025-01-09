<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Dimension> $Dimensions
 * @property string $Stat
 * @property AnomalyDetectorConfiguration $Configuration
 * @property 'PENDING_TRAINING'|'TRAINED_INSUFFICIENT_DATA'|'TRAINED' $StateValue
 * @property MetricCharacteristics $MetricCharacteristics
 * @property SingleMetricAnomalyDetector $SingleMetricAnomalyDetector
 * @property MetricMathAnomalyDetector $MetricMathAnomalyDetector
 */
class AnomalyDetector extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Dimension>,
     *     Stat?: string,
     *     Configuration?: AnomalyDetectorConfiguration,
     *     StateValue?: 'PENDING_TRAINING'|'TRAINED_INSUFFICIENT_DATA'|'TRAINED',
     *     MetricCharacteristics?: MetricCharacteristics,
     *     SingleMetricAnomalyDetector?: SingleMetricAnomalyDetector,
     *     MetricMathAnomalyDetector?: MetricMathAnomalyDetector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
