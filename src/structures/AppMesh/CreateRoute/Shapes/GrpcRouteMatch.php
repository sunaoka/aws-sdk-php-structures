<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GrpcRouteMetadata>|null $metadata
 * @property string|null $methodName
 * @property int<1, 65535>|null $port
 * @property string|null $serviceName
 */
class GrpcRouteMatch extends Shape
{
    /**
     * @param array{
     *     metadata?: list<GrpcRouteMetadata>|null,
     *     methodName?: string|null,
     *     port?: int<1, 65535>|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
