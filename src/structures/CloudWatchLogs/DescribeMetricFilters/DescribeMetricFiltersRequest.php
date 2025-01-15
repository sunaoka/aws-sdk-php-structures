<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeMetricFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property string|null $filterNamePrefix
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 * @property string|null $metricName
 * @property string|null $metricNamespace
 */
class DescribeMetricFiltersRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     filterNamePrefix?: string|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null,
     *     metricName?: string|null,
     *     metricNamespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
