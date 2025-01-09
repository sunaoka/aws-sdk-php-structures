<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BootstrapServers
 * @property string $SecurityProtocol
 * @property string $ConnectionName
 * @property string $TopicName
 * @property string $Assign
 * @property string $SubscribePattern
 * @property string $Classification
 * @property string $Delimiter
 * @property string $StartingOffsets
 * @property string $EndingOffsets
 * @property int $PollTimeoutMs
 * @property int $NumRetries
 * @property int $RetryIntervalMs
 * @property int $MaxOffsetsPerTrigger
 * @property int $MinPartitions
 * @property bool $IncludeHeaders
 * @property string $AddRecordTimestamp
 * @property string $EmitConsumerLagMetrics
 * @property \Aws\Api\DateTimeResult $StartingTimestamp
 */
class KafkaStreamingSourceOptions extends Shape
{
    /**
     * @param array{
     *     BootstrapServers?: string,
     *     SecurityProtocol?: string,
     *     ConnectionName?: string,
     *     TopicName?: string,
     *     Assign?: string,
     *     SubscribePattern?: string,
     *     Classification?: string,
     *     Delimiter?: string,
     *     StartingOffsets?: string,
     *     EndingOffsets?: string,
     *     PollTimeoutMs?: int,
     *     NumRetries?: int,
     *     RetryIntervalMs?: int,
     *     MaxOffsetsPerTrigger?: int,
     *     MinPartitions?: int,
     *     IncludeHeaders?: bool,
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
