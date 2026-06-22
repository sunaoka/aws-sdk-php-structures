<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 */
class KafkaClusterMTLSAuthentication extends Shape
{
    /**
     * @param array{SecretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
