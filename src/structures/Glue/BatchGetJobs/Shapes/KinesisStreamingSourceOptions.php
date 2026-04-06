<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointUrl
 * @property string|null $StreamName
 * @property string|null $Classification
 * @property string|null $Delimiter
 * @property 'latest'|'trim_horizon'|'earliest'|'timestamp'|null $StartingPosition
 * @property int<0, max>|null $MaxFetchTimeInMs
 * @property int<0, max>|null $MaxFetchRecordsPerShard
 * @property int<0, max>|null $MaxRecordPerRead
 * @property bool|null $AddIdleTimeBetweenReads
 * @property int<0, max>|null $IdleTimeBetweenReadsInMs
 * @property int<0, max>|null $DescribeShardInterval
 * @property int<0, max>|null $NumRetries
 * @property int<0, max>|null $RetryIntervalMs
 * @property int<0, max>|null $MaxRetryIntervalMs
 * @property bool|null $AvoidEmptyBatches
 * @property string|null $StreamArn
 * @property string|null $RoleArn
 * @property string|null $RoleSessionName
 * @property string|null $AddRecordTimestamp
 * @property string|null $EmitConsumerLagMetrics
 * @property \Aws\Api\DateTimeResult|null $StartingTimestamp
 * @property string|null $FanoutConsumerARN
 */
class KinesisStreamingSourceOptions extends Shape
{
    /**
     * @param array{
     *     EndpointUrl?: string|null,
     *     StreamName?: string|null,
     *     Classification?: string|null,
     *     Delimiter?: string|null,
     *     StartingPosition?: 'latest'|'trim_horizon'|'earliest'|'timestamp'|null,
     *     MaxFetchTimeInMs?: int<0, max>|null,
     *     MaxFetchRecordsPerShard?: int<0, max>|null,
     *     MaxRecordPerRead?: int<0, max>|null,
     *     AddIdleTimeBetweenReads?: bool|null,
     *     IdleTimeBetweenReadsInMs?: int<0, max>|null,
     *     DescribeShardInterval?: int<0, max>|null,
     *     NumRetries?: int<0, max>|null,
     *     RetryIntervalMs?: int<0, max>|null,
     *     MaxRetryIntervalMs?: int<0, max>|null,
     *     AvoidEmptyBatches?: bool|null,
     *     StreamArn?: string|null,
     *     RoleArn?: string|null,
     *     RoleSessionName?: string|null,
     *     AddRecordTimestamp?: string|null,
     *     EmitConsumerLagMetrics?: string|null,
     *     StartingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     FanoutConsumerARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
