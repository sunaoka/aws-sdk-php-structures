<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentArn
 * @property string $IpAddress
 */
class RouteAnalysisEndpointOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentArn?: string,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
