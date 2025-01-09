<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endDate
 * @property int $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startDate
 */
class ListFindingsMetricsRequest extends Request
{
    /**
     * @param array{
     *     endDate: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     nextToken?: string,
     *     startDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
