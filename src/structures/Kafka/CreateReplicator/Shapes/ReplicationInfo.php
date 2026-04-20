<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConsumerGroupReplication $ConsumerGroupReplication
 * @property string|null $SourceKafkaClusterArn
 * @property string|null $SourceKafkaClusterId
 * @property 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD' $TargetCompressionType
 * @property string|null $TargetKafkaClusterArn
 * @property string|null $TargetKafkaClusterId
 * @property TopicReplication $TopicReplication
 */
class ReplicationInfo extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupReplication: ConsumerGroupReplication,
     *     SourceKafkaClusterArn?: string|null,
     *     SourceKafkaClusterId?: string|null,
     *     TargetCompressionType: 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD',
     *     TargetKafkaClusterArn?: string|null,
     *     TargetKafkaClusterId?: string|null,
     *     TopicReplication: TopicReplication
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
