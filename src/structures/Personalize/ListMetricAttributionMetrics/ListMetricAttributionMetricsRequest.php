<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $metricAttributionArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListMetricAttributionMetricsRequest extends Request
{
    /**
     * @param array{
     *     metricAttributionArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
