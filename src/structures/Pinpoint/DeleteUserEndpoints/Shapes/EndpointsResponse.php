<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteUserEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EndpointResponse> $Item
 */
class EndpointsResponse extends Shape
{
    /**
     * @param array{Item: list<EndpointResponse>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
