<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeMesh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property MeshSpec $spec
 * @property MeshStatus $status
 */
class MeshData extends Shape
{
    /**
     * @param array{
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     spec: MeshSpec,
     *     status: MeshStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
