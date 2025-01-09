<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeMetricFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterNamePrefix
 * @property string $nextToken
 * @property int<1, 50> $limit
 * @property string $metricName
 * @property string $metricNamespace
 */
class DescribeMetricFiltersRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     filterNamePrefix?: string,
     *     nextToken?: string,
     *     limit?: int<1, 50>,
     *     metricName?: string,
     *     metricNamespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
