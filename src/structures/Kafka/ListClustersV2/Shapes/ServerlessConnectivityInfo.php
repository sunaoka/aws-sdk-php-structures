<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'DUAL'|null $NetworkType
 */
class ServerlessConnectivityInfo extends Shape
{
    /**
     * @param array{NetworkType?: 'IPV4'|'DUAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
