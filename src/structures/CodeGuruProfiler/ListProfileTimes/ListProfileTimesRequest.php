<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfileTimes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'TimestampDescending'|'TimestampAscending'|null $orderBy
 * @property 'PT5M'|'PT1H'|'P1D' $period
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListProfileTimesRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     orderBy?: 'TimestampDescending'|'TimestampAscending'|null,
     *     period: 'PT5M'|'PT1H'|'P1D',
     *     profilingGroupName: string,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
