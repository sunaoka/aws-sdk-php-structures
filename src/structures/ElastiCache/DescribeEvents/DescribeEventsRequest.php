<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceIdentifier
 * @property 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group'|null $SourceType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $Duration
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
