<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PLAINTEXT'|'TLS' $encryptionType
 */
class KafkaClusterEncryptionInTransit extends Shape
{
    /**
     * @param array{encryptionType: 'PLAINTEXT'|'TLS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
