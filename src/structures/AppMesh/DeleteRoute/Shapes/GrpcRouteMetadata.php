<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $invert
 * @property GrpcRouteMetadataMatchMethod $match
 * @property string $name
 */
class GrpcRouteMetadata extends Shape
{
    /**
     * @param array{
     *     invert?: bool,
     *     match?: GrpcRouteMetadataMatchMethod,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
