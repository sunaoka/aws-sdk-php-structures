<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentArn
 * @property string $TransitGatewayArn
 * @property string $IpAddress
 */
class RouteAnalysisEndpointOptions extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentArn?: string,
     *     TransitGatewayArn?: string,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
