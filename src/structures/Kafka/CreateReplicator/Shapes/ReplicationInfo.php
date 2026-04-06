<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConsumerGroupReplication $ConsumerGroupReplication
 * @property string $SourceKafkaClusterArn
 * @property 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD' $TargetCompressionType
 * @property string $TargetKafkaClusterArn
 * @property TopicReplication $TopicReplication
 */
class ReplicationInfo extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupReplication: ConsumerGroupReplication,
     *     SourceKafkaClusterArn: string,
     *     TargetCompressionType: 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD',
     *     TargetKafkaClusterArn: string,
     *     TopicReplication: TopicReplication
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
