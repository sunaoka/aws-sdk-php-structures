<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Sasl $Sasl
 * @property Tls $Tls
 * @property Unauthenticated $Unauthenticated
 */
class ClientAuthentication extends Shape
{
    /**
     * @param array{
     *     Sasl?: Sasl,
     *     Tls?: Tls,
     *     Unauthenticated?: Unauthenticated
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
