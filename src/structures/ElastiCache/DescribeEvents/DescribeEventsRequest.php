<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceIdentifier
 * @property 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group' $SourceType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Duration
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
