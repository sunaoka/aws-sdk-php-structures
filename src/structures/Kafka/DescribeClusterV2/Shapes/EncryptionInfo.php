<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionAtRest $EncryptionAtRest
 * @property EncryptionInTransit $EncryptionInTransit
 */
class EncryptionInfo extends Shape
{
    /**
     * @param array{
     *     EncryptionAtRest?: EncryptionAtRest,
     *     EncryptionInTransit?: EncryptionInTransit
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
