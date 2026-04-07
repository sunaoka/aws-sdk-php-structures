<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetResponderGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'HTTP'|'HTTPS'> $protocols
 */
class ListenerConfig extends Shape
{
    /**
     * @param array{protocols: list<'HTTP'|'HTTPS'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
