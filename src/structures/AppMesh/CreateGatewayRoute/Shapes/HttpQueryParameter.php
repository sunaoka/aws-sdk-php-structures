<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryParameterMatch|null $match
 * @property string $name
 */
class HttpQueryParameter extends Shape
{
    /**
     * @param array{
     *     match?: QueryParameterMatch|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
