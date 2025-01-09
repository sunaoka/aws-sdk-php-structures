<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property VirtualRouterSpec $spec
 * @property VirtualRouterStatus $status
 * @property string $virtualRouterName
 */
class VirtualRouterData extends Shape
{
    /**
     * @param array{
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     spec: VirtualRouterSpec,
     *     status: VirtualRouterStatus,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
