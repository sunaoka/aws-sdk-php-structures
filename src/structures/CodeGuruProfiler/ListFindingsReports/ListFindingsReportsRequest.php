<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListFindingsReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $dailyReportsOnly
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListFindingsReportsRequest extends Request
{
    /**
     * @param array{
     *     dailyReportsOnly?: bool|null,
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     profilingGroupName: string,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
