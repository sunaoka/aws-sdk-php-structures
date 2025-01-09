<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointUrl
 * @property string $StreamName
 * @property string $Classification
 * @property string $Delimiter
 * @property 'latest'|'trim_horizon'|'earliest'|'timestamp' $StartingPosition
 * @property int $MaxFetchTimeInMs
 * @property int $MaxFetchRecordsPerShard
 * @property int $MaxRecordPerRead
 * @property bool $AddIdleTimeBetweenReads
 * @property int $IdleTimeBetweenReadsInMs
 * @property int $DescribeShardInterval
 * @property int $NumRetries
 * @property int $RetryIntervalMs
 * @property int $MaxRetryIntervalMs
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
     *     MaxFetchTimeInMs?: int,
     *     MaxFetchRecordsPerShard?: int,
     *     MaxRecordPerRead?: int,
     *     AddIdleTimeBetweenReads?: bool,
     *     IdleTimeBetweenReadsInMs?: int,
     *     DescribeShardInterval?: int,
     *     NumRetries?: int,
     *     RetryIntervalMs?: int,
     *     MaxRetryIntervalMs?: int,
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
