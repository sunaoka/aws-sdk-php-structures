<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LATEST'|'EARLIEST'|null $Type
 */
class ReplicationStartingPosition extends Shape
{
    /**
     * @param array{Type?: 'LATEST'|'EARLIEST'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
