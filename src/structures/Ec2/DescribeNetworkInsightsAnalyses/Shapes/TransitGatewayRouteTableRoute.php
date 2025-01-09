<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidr
 * @property string $State
 * @property string $RouteOrigin
 * @property string $PrefixListId
 * @property string $AttachmentId
 * @property string $ResourceId
 * @property string $ResourceType
 */
class TransitGatewayRouteTableRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidr?: string,
     *     State?: string,
     *     RouteOrigin?: string,
     *     PrefixListId?: string,
     *     AttachmentId?: string,
     *     ResourceId?: string,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
