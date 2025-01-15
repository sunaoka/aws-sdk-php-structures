<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationCidrBlock
 * @property string $TransitGatewayRouteTableId
 * @property string|null $TransitGatewayAttachmentId
 * @property bool|null $Blackhole
 * @property bool|null $DryRun
 */
class CreateTransitGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock: string,
     *     TransitGatewayRouteTableId: string,
     *     TransitGatewayAttachmentId?: string|null,
     *     Blackhole?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
