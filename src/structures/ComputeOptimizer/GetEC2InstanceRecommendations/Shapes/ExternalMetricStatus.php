<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_EXTERNAL_METRIC_SET'|'INTEGRATION_SUCCESS'|'DATADOG_INTEGRATION_ERROR'|'DYNATRACE_INTEGRATION_ERROR'|'NEWRELIC_INTEGRATION_ERROR'|'INSTANA_INTEGRATION_ERROR'|'INSUFFICIENT_DATADOG_METRICS'|'INSUFFICIENT_DYNATRACE_METRICS'|'INSUFFICIENT_NEWRELIC_METRICS'|'INSUFFICIENT_INSTANA_METRICS' $statusCode
 * @property string $statusReason
 */
class ExternalMetricStatus extends Shape
{
    /**
     * @param array{
     *     statusCode?: 'NO_EXTERNAL_METRIC_SET'|'INTEGRATION_SUCCESS'|'DATADOG_INTEGRATION_ERROR'|'DYNATRACE_INTEGRATION_ERROR'|'NEWRELIC_INTEGRATION_ERROR'|'INSTANA_INTEGRATION_ERROR'|'INSUFFICIENT_DATADOG_METRICS'|'INSUFFICIENT_DYNATRACE_METRICS'|'INSUFFICIENT_NEWRELIC_METRICS'|'INSUFFICIENT_INSTANA_METRICS',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
