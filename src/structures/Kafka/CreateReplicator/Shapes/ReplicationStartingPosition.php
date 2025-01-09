<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LATEST'|'EARLIEST' $Type
 */
class ReplicationStartingPosition extends Shape
{
    /**
     * @param array{Type?: 'LATEST'|'EARLIEST'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
