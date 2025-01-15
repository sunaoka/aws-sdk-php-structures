<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Sasl|null $Sasl
 * @property Tls|null $Tls
 * @property Unauthenticated|null $Unauthenticated
 */
class ClientAuthentication extends Shape
{
    /**
     * @param array{
     *     Sasl?: Sasl|null,
     *     Tls?: Tls|null,
     *     Unauthenticated?: Unauthenticated|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
