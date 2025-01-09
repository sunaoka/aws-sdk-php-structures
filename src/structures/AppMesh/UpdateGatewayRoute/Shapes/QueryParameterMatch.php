<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 */
class QueryParameterMatch extends Shape
{
    /**
     * @param array{exact?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
