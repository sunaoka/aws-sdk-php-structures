<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $TransitGatewayAttachmentId
 * @property bool $DryRun
 */
class AssociateTransitGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     TransitGatewayAttachmentId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
