<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property VirtualNodeSpec $spec
 * @property VirtualNodeStatus $status
 * @property string $virtualNodeName
 */
class VirtualNodeData extends Shape
{
    /**
     * @param array{
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     spec: VirtualNodeSpec,
     *     status: VirtualNodeStatus,
     *     virtualNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
