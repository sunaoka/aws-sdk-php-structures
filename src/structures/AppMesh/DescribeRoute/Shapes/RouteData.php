<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property string $routeName
 * @property RouteSpec $spec
 * @property RouteStatus $status
 * @property string $virtualRouterName
 */
class RouteData extends Shape
{
    /**
     * @param array{
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     routeName: string,
     *     spec: RouteSpec,
     *     status: RouteStatus,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
