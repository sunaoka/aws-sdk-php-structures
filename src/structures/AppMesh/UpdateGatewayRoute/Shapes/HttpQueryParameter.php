<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryParameterMatch $match
 * @property string $name
 */
class HttpQueryParameter extends Shape
{
    /**
     * @param array{
     *     match?: QueryParameterMatch,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
