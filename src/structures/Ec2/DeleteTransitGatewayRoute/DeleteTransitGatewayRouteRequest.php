<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $DestinationCidrBlock
 * @property bool $DryRun
 */
class DeleteTransitGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     DestinationCidrBlock: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
