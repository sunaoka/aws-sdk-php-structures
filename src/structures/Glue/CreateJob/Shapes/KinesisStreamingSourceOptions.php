<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointUrl
 * @property string $StreamName
 * @property string $Classification
 * @property string $Delimiter
 * @property 'latest'|'trim_horizon'|'earliest'|'timestamp' $StartingPosition
 * @property int<0, max> $MaxFetchTimeInMs
 * @property int<0, max> $MaxFetchRecordsPerShard
 * @property int<0, max> $MaxRecordPerRead
 * @property bool $AddIdleTimeBetweenReads
 * @property int<0, max> $IdleTimeBetweenReadsInMs
 * @property int<0, max> $DescribeShardInterval
 * @property int<0, max> $NumRetries
 * @property int<0, max> $RetryIntervalMs
 * @property int<0, max> $MaxRetryIntervalMs
 * @property bool $AvoidEmptyBatches
 * @property string $StreamArn
 * @property string $RoleArn
 * @property string $RoleSessionName
 * @property string $AddRecordTimestamp
 * @property string $EmitConsumerLagMetrics
 * @property \Aws\Api\DateTimeResult $StartingTimestamp
 */
class KinesisStreamingSourceOptions extends Shape
{
    /**
     * @param array{
     *     EndpointUrl?: string,
     *     StreamName?: string,
     *     Classification?: string,
     *     Delimiter?: string,
     *     StartingPosition?: 'latest'|'trim_horizon'|'earliest'|'timestamp',
     *     MaxFetchTimeInMs?: int<0, max>,
     *     MaxFetchRecordsPerShard?: int<0, max>,
     *     MaxRecordPerRead?: int<0, max>,
     *     AddIdleTimeBetweenReads?: bool,
     *     IdleTimeBetweenReadsInMs?: int<0, max>,
     *     DescribeShardInterval?: int<0, max>,
     *     NumRetries?: int<0, max>,
     *     RetryIntervalMs?: int<0, max>,
     *     MaxRetryIntervalMs?: int<0, max>,
     *     AvoidEmptyBatches?: bool,
     *     StreamArn?: string,
     *     RoleArn?: string,
     *     RoleSessionName?: string,
     *     AddRecordTimestamp?: string,
     *     EmitConsumerLagMetrics?: string,
     *     StartingTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
