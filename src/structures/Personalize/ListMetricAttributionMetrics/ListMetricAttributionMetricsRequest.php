<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricAttributionArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListMetricAttributionMetricsRequest extends Request
{
    /**
     * @param array{
     *     metricAttributionArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
