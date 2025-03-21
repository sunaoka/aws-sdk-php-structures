<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentArn
 * @property string|null $IpAddress
 */
class RouteAnalysisEndpointOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentArn?: string|null,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
