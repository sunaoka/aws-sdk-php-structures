<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateMetricAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MetricAttribute>|null $addMetrics
 * @property list<string>|null $removeMetrics
 * @property Shapes\MetricAttributionOutput|null $metricsOutputConfig
 * @property string|null $metricAttributionArn
 */
class UpdateMetricAttributionRequest extends Request
{
    /**
     * @param array{
     *     addMetrics?: list<Shapes\MetricAttribute>|null,
     *     removeMetrics?: list<string>|null,
     *     metricsOutputConfig?: Shapes\MetricAttributionOutput|null,
     *     metricAttributionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
