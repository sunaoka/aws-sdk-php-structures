<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHA256'|'SHA512' $Mechanism
 * @property string $SecretArn
 */
class KafkaClusterSaslScramAuthentication extends Shape
{
    /**
     * @param array{
     *     Mechanism: 'SHA256'|'SHA512',
     *     SecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
