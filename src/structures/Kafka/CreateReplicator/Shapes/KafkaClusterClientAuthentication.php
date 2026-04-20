<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KafkaClusterSaslScramAuthentication $SaslScram
 */
class KafkaClusterClientAuthentication extends Shape
{
    /**
     * @param array{SaslScram: KafkaClusterSaslScramAuthentication} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
