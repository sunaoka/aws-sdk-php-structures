<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceName
 * @property 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl'|null $SourceType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $Duration
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceName?: string|null,
     *     SourceType?: 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
