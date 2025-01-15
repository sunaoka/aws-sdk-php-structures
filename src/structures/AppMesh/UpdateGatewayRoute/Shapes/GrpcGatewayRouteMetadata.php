<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $invert
 * @property GrpcMetadataMatchMethod|null $match
 * @property string $name
 */
class GrpcGatewayRouteMetadata extends Shape
{
    /**
     * @param array{
     *     invert?: bool|null,
     *     match?: GrpcMetadataMatchMethod|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
