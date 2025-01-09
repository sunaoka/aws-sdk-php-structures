<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListFindingsReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $dailyReportsOnly
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListFindingsReportsRequest extends Request
{
    /**
     * @param array{
     *     dailyReportsOnly?: bool,
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     profilingGroupName: string,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
