<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidr
 * @property string|null $State
 * @property string|null $RouteOrigin
 * @property string|null $PrefixListId
 * @property string|null $AttachmentId
 * @property string|null $ResourceId
 * @property string|null $ResourceType
 */
class TransitGatewayRouteTableRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidr?: string|null,
     *     State?: string|null,
     *     RouteOrigin?: string|null,
     *     PrefixListId?: string|null,
     *     AttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
