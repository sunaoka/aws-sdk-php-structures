<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property bool $DryRun
 */
class DeleteTransitGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
