<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $invert
 * @property HeaderMatchMethod $match
 * @property string $name
 */
class HttpRouteHeader extends Shape
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
