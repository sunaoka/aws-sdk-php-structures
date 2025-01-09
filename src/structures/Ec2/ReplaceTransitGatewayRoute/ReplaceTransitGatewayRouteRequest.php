<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceTransitGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationCidrBlock
 * @property string $TransitGatewayRouteTableId
 * @property string $TransitGatewayAttachmentId
 * @property bool $Blackhole
 * @property bool $DryRun
 */
class ReplaceTransitGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock: string,
     *     TransitGatewayRouteTableId: string,
     *     TransitGatewayAttachmentId?: string,
     *     Blackhole?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
