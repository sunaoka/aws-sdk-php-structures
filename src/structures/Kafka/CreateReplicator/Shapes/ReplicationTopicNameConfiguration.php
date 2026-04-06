<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREFIXED_WITH_SOURCE_CLUSTER_ALIAS'|'IDENTICAL'|null $Type
 */
class ReplicationTopicNameConfiguration extends Shape
{
    /**
     * @param array{Type?: 'PREFIXED_WITH_SOURCE_CLUSTER_ALIAS'|'IDENTICAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
