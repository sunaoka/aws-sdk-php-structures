<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceName
 * @property 'CLUSTER'|'PARAMETER_GROUP'|'SUBNET_GROUP' $SourceType
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
     *     SourceType?: 'CLUSTER'|'PARAMETER_GROUP'|'SUBNET_GROUP',
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
