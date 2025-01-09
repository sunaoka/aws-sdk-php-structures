<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property VirtualGatewaySpec $spec
 * @property VirtualGatewayStatus $status
 * @property string $virtualGatewayName
 */
class VirtualGatewayData extends Shape
{
    /**
     * @param array{
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     spec: VirtualGatewaySpec,
     *     status: VirtualGatewayStatus,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
