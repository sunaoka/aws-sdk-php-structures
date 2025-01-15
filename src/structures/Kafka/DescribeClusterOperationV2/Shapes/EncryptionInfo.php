<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionAtRest|null $EncryptionAtRest
 * @property EncryptionInTransit|null $EncryptionInTransit
 */
class EncryptionInfo extends Shape
{
    /**
     * @param array{
     *     EncryptionAtRest?: EncryptionAtRest|null,
     *     EncryptionInTransit?: EncryptionInTransit|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
