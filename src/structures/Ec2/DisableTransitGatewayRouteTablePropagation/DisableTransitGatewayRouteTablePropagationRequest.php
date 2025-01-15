<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableTransitGatewayRouteTablePropagation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string|null $TransitGatewayAttachmentId
 * @property bool|null $DryRun
 * @property string|null $TransitGatewayRouteTableAnnouncementId
 */
class DisableTransitGatewayRouteTablePropagationRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     TransitGatewayAttachmentId?: string|null,
     *     DryRun?: bool|null,
     *     TransitGatewayRouteTableAnnouncementId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
