<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GrpcRouteMetadata> $metadata
 * @property string $methodName
 * @property int $port
 * @property string $serviceName
 */
class GrpcRouteMatch extends Shape
{
    /**
     * @param array{
     *     metadata?: list<GrpcRouteMetadata>,
     *     methodName?: string,
     *     port?: int,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
