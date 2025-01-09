<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerlessSasl $Sasl
 */
class ServerlessClientAuthentication extends Shape
{
    /**
     * @param array{Sasl?: ServerlessSasl} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
