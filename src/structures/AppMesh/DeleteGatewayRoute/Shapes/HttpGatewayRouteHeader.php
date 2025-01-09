<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $invert
 * @property HeaderMatchMethod $match
 * @property string $name
 */
class HttpGatewayRouteHeader extends Shape
{
    /**
     * @param array{
     *     invert?: bool,
     *     match?: HeaderMatchMethod,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
