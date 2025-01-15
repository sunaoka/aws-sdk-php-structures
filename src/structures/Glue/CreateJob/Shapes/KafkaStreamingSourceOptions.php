<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BootstrapServers
 * @property string|null $SecurityProtocol
 * @property string|null $ConnectionName
 * @property string|null $TopicName
 * @property string|null $Assign
 * @property string|null $SubscribePattern
 * @property string|null $Classification
 * @property string|null $Delimiter
 * @property string|null $StartingOffsets
 * @property string|null $EndingOffsets
 * @property int<0, max>|null $PollTimeoutMs
 * @property int<0, max>|null $NumRetries
 * @property int<0, max>|null $RetryIntervalMs
 * @property int<0, max>|null $MaxOffsetsPerTrigger
 * @property int<0, max>|null $MinPartitions
 * @property bool|null $IncludeHeaders
 * @property string|null $AddRecordTimestamp
 * @property string|null $EmitConsumerLagMetrics
 * @property \Aws\Api\DateTimeResult|null $StartingTimestamp
 */
class KafkaStreamingSourceOptions extends Shape
{
    /**
     * @param array{
     *     BootstrapServers?: string|null,
     *     SecurityProtocol?: string|null,
     *     ConnectionName?: string|null,
     *     TopicName?: string|null,
     *     Assign?: string|null,
     *     SubscribePattern?: string|null,
     *     Classification?: string|null,
     *     Delimiter?: string|null,
     *     StartingOffsets?: string|null,
     *     EndingOffsets?: string|null,
     *     PollTimeoutMs?: int<0, max>|null,
     *     NumRetries?: int<0, max>|null,
     *     RetryIntervalMs?: int<0, max>|null,
     *     MaxOffsetsPerTrigger?: int<0, max>|null,
     *     MinPartitions?: int<0, max>|null,
     *     IncludeHeaders?: bool|null,
     *     AddRecordTimestamp?: string|null,
     *     EmitConsumerLagMetrics?: string|null,
     *     StartingTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
