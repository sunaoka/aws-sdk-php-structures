<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Namespace
 * @property string|null $MetricName
 * @property list<Shapes\Dimension>|null $Dimensions
 * @property string|null $Stat
 * @property Shapes\SingleMetricAnomalyDetector|null $SingleMetricAnomalyDetector
 * @property Shapes\MetricMathAnomalyDetector|null $MetricMathAnomalyDetector
 */
class DeleteAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     MetricName?: string|null,
     *     Dimensions?: list<Shapes\Dimension>|null,
     *     Stat?: string|null,
     *     SingleMetricAnomalyDetector?: Shapes\SingleMetricAnomalyDetector|null,
     *     MetricMathAnomalyDetector?: Shapes\MetricMathAnomalyDetector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
