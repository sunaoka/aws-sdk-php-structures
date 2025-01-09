<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 * @property list<Shapes\MetricDatum> $MetricData
 */
class PublishMetricsRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName: string,
     *     MetricData: list<Shapes\MetricDatum>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
