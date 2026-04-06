<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConsumerGroupReplication|null $ConsumerGroupReplication
 * @property string|null $SourceKafkaClusterAlias
 * @property 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD'|null $TargetCompressionType
 * @property string|null $TargetKafkaClusterAlias
 * @property TopicReplication|null $TopicReplication
 */
class ReplicationInfoDescription extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupReplication?: ConsumerGroupReplication|null,
     *     SourceKafkaClusterAlias?: string|null,
     *     TargetCompressionType?: 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD'|null,
     *     TargetKafkaClusterAlias?: string|null,
     *     TopicReplication?: TopicReplication|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
