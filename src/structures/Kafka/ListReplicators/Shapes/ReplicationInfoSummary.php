<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceKafkaClusterAlias
 * @property string|null $TargetKafkaClusterAlias
 */
class ReplicationInfoSummary extends Shape
{
    /**
     * @param array{
     *     SourceKafkaClusterAlias?: string|null,
     *     TargetKafkaClusterAlias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
