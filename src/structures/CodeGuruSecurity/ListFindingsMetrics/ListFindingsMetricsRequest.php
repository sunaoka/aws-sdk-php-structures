<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 */
class ListFindingsMetricsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
