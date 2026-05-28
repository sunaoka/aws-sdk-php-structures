<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListDependencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceArn
 * @property \Aws\Api\DateTimeResult|null $queryRangeStartTime
 * @property \Aws\Api\DateTimeResult|null $queryRangeEndTime
 * @property 'HOURLY'|'DAILY'|null $queryRangeGranularity
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDependenciesRequest extends Request
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     queryRangeStartTime?: \Aws\Api\DateTimeResult|null,
     *     queryRangeEndTime?: \Aws\Api\DateTimeResult|null,
     *     queryRangeGranularity?: 'HOURLY'|'DAILY'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
