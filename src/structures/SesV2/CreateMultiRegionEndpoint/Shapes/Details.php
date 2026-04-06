<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateMultiRegionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteDetails> $RoutesDetails
 */
class Details extends Shape
{
    /**
     * @param array{RoutesDetails: list<RouteDetails>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
