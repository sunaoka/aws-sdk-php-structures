<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1024, 65536>|null $PrefixLength
 * @property int<1, 1024>|null $ConcurrencyThreshold
 */
class PrefixAwareRoutingConfig extends Shape
{
    /**
     * @param array{
     *     PrefixLength?: int<1024, 65536>|null,
     *     ConcurrencyThreshold?: int<1, 1024>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
