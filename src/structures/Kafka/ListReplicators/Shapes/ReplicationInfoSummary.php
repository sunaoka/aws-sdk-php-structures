<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceKafkaClusterAlias
 * @property string $TargetKafkaClusterAlias
 */
class ReplicationInfoSummary extends Shape
{
    /**
     * @param array{
     *     SourceKafkaClusterAlias?: string,
     *     TargetKafkaClusterAlias?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
