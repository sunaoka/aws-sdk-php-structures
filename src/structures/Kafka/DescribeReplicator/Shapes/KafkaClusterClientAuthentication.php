<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KafkaClusterSaslScramAuthentication|null $SaslScram
 * @property KafkaClusterMTLSAuthentication|null $MTLS
 */
class KafkaClusterClientAuthentication extends Shape
{
    /**
     * @param array{
     *     SaslScram?: KafkaClusterSaslScramAuthentication|null,
     *     MTLS?: KafkaClusterMTLSAuthentication|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
