<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Shapes\Dimension> $Dimensions
 * @property string $Stat
 * @property Shapes\AnomalyDetectorConfiguration $Configuration
 * @property Shapes\MetricCharacteristics $MetricCharacteristics
 * @property Shapes\SingleMetricAnomalyDetector $SingleMetricAnomalyDetector
 * @property Shapes\MetricMathAnomalyDetector $MetricMathAnomalyDetector
 */
class PutAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Shapes\Dimension>,
     *     Stat?: string,
     *     Configuration?: Shapes\AnomalyDetectorConfiguration,
     *     MetricCharacteristics?: Shapes\MetricCharacteristics,
     *     SingleMetricAnomalyDetector?: Shapes\SingleMetricAnomalyDetector,
     *     MetricMathAnomalyDetector?: Shapes\MetricMathAnomalyDetector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
