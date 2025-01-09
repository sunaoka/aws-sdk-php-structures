<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREFIXED_WITH_SOURCE_CLUSTER_ALIAS'|'IDENTICAL' $Type
 */
class ReplicationTopicNameConfiguration extends Shape
{
    /**
     * @param array{Type?: 'PREFIXED_WITH_SOURCE_CLUSTER_ALIAS'|'IDENTICAL'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
