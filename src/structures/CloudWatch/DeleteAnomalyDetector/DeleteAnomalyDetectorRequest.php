<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Shapes\Dimension> $Dimensions
 * @property string $Stat
 * @property Shapes\SingleMetricAnomalyDetector $SingleMetricAnomalyDetector
 * @property Shapes\MetricMathAnomalyDetector $MetricMathAnomalyDetector
 */
class DeleteAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Shapes\Dimension>,
     *     Stat?: string,
     *     SingleMetricAnomalyDetector?: Shapes\SingleMetricAnomalyDetector,
     *     MetricMathAnomalyDetector?: Shapes\MetricMathAnomalyDetector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
