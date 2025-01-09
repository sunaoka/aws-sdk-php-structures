<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableTransitGatewayRouteTablePropagation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $TransitGatewayAttachmentId
 * @property bool $DryRun
 * @property string $TransitGatewayRouteTableAnnouncementId
 */
class DisableTransitGatewayRouteTablePropagationRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     TransitGatewayAttachmentId?: string,
     *     DryRun?: bool,
     *     TransitGatewayRouteTableAnnouncementId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
