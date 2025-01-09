<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConsumerGroupReplication $ConsumerGroupReplication
 * @property string $SourceKafkaClusterAlias
 * @property 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD' $TargetCompressionType
 * @property string $TargetKafkaClusterAlias
 * @property TopicReplication $TopicReplication
 */
class ReplicationInfoDescription extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupReplication?: ConsumerGroupReplication,
     *     SourceKafkaClusterAlias?: string,
     *     TargetCompressionType?: 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD',
     *     TargetKafkaClusterAlias?: string,
     *     TopicReplication?: TopicReplication
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
