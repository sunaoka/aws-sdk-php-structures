<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceName
 * @property 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl' $SourceType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Duration
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceName?: string,
     *     SourceType?: 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
