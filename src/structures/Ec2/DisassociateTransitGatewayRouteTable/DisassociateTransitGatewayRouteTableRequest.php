<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $TransitGatewayAttachmentId
 * @property bool|null $DryRun
 */
class DisassociateTransitGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     TransitGatewayAttachmentId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
