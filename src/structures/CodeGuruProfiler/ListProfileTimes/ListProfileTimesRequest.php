<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfileTimes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $maxResults
 * @property string $nextToken
 * @property 'TimestampDescending'|'TimestampAscending' $orderBy
 * @property 'PT5M'|'PT1H'|'P1D' $period
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListProfileTimesRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     nextToken?: string,
     *     orderBy?: 'TimestampDescending'|'TimestampAscending',
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
