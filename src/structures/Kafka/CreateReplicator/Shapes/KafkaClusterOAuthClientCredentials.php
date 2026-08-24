<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TokenRequestSecretArn
 */
class KafkaClusterOAuthClientCredentials extends Shape
{
    /**
     * @param array{TokenRequestSecretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
