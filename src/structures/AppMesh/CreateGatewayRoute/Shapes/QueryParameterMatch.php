<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exact
 */
class QueryParameterMatch extends Shape
{
    /**
     * @param array{exact?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
