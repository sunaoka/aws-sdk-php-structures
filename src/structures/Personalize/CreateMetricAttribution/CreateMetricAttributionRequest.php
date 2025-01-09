<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateMetricAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $datasetGroupArn
 * @property list<Shapes\MetricAttribute> $metrics
 * @property Shapes\MetricAttributionOutput $metricsOutputConfig
 */
class CreateMetricAttributionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     datasetGroupArn: string,
     *     metrics: list<Shapes\MetricAttribute>,
     *     metricsOutputConfig: Shapes\MetricAttributionOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
