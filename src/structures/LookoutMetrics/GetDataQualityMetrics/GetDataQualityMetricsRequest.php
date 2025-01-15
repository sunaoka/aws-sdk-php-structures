<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string|null $MetricSetArn
 */
class GetDataQualityMetricsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     MetricSetArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
