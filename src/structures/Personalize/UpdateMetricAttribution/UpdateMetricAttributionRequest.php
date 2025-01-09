<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateMetricAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MetricAttribute> $addMetrics
 * @property list<string> $removeMetrics
 * @property Shapes\MetricAttributionOutput $metricsOutputConfig
 * @property string $metricAttributionArn
 */
class UpdateMetricAttributionRequest extends Request
{
    /**
     * @param array{
     *     addMetrics?: list<Shapes\MetricAttribute>,
     *     removeMetrics?: list<string>,
     *     metricsOutputConfig?: Shapes\MetricAttributionOutput,
     *     metricAttributionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
