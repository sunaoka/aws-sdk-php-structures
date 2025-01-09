<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GrpcRouteMetadata> $metadata
 * @property string $methodName
 * @property int<1, 65535> $port
 * @property string $serviceName
 */
class GrpcRouteMatch extends Shape
{
    /**
     * @param array{
     *     metadata?: list<GrpcRouteMetadata>,
     *     methodName?: string,
     *     port?: int<1, 65535>,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
