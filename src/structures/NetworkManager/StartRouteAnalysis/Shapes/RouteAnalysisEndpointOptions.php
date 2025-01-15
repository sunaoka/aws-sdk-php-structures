<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentArn
 * @property string|null $TransitGatewayArn
 * @property string|null $IpAddress
 */
class RouteAnalysisEndpointOptions extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentArn?: string|null,
     *     TransitGatewayArn?: string|null,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
