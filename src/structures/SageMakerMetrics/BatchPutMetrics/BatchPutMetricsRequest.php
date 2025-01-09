<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchPutMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 * @property list<Shapes\RawMetricData> $MetricData
 */
class BatchPutMetricsRequest extends Request
{
    /**
     * @param array{
     *     TrialComponentName: string,
     *     MetricData: list<Shapes\RawMetricData>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
