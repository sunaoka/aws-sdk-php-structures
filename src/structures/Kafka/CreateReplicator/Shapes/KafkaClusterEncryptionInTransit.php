<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TLS' $EncryptionType
 * @property string|null $RootCaCertificate
 */
class KafkaClusterEncryptionInTransit extends Shape
{
    /**
     * @param array{
     *     EncryptionType: 'TLS',
     *     RootCaCertificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
