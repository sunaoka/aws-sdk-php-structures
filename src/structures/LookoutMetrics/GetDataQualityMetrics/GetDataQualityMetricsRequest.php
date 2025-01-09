<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $MetricSetArn
 */
class GetDataQualityMetricsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     MetricSetArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
