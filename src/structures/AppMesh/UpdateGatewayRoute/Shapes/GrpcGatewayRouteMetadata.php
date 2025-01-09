<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $invert
 * @property GrpcMetadataMatchMethod $match
 * @property string $name
 */
class GrpcGatewayRouteMetadata extends Shape
{
    /**
     * @param array{
     *     invert?: bool,
     *     match?: GrpcMetadataMatchMethod,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
