<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TLS'|'TLS_PLAINTEXT'|'PLAINTEXT'|null $ClientBroker
 * @property bool|null $InCluster
 */
class EncryptionInTransit extends Shape
{
    /**
     * @param array{
     *     ClientBroker?: 'TLS'|'TLS_PLAINTEXT'|'PLAINTEXT'|null,
     *     InCluster?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
