<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $invert
 * @property HeaderMatchMethod|null $match
 * @property string $name
 */
class HttpGatewayRouteHeader extends Shape
{
    /**
     * @param array{
     *     invert?: bool|null,
     *     match?: HeaderMatchMethod|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
