<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $invert
 * @property GrpcRouteMetadataMatchMethod|null $match
 * @property string $name
 */
class GrpcRouteMetadata extends Shape
{
    /**
     * @param array{
     *     invert?: bool|null,
     *     match?: GrpcRouteMetadataMatchMethod|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
