<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TLS'|'TLS_PLAINTEXT'|'PLAINTEXT' $ClientBroker
 * @property bool $InCluster
 */
class EncryptionInTransit extends Shape
{
    /**
     * @param array{
     *     ClientBroker?: 'TLS'|'TLS_PLAINTEXT'|'PLAINTEXT',
     *     InCluster?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
