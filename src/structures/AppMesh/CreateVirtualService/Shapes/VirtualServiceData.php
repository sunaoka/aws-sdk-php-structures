<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property VirtualServiceSpec $spec
 * @property VirtualServiceStatus $status
 * @property string $virtualServiceName
 */
class VirtualServiceData extends Shape
{
    /**
     * @param array{
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     spec: VirtualServiceSpec,
     *     status: VirtualServiceStatus,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
