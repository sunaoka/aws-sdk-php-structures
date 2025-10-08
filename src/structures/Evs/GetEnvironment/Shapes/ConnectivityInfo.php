<?php

namespace Sunaoka\Aws\Structures\Evs\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $privateRouteServerPeerings
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{privateRouteServerPeerings: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
