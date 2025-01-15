<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerlessSasl|null $Sasl
 */
class ServerlessClientAuthentication extends Shape
{
    /**
     * @param array{Sasl?: ServerlessSasl|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
