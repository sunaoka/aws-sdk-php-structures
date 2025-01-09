<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayId
 * @property bool $DryRun
 * @property string $SubnetId
 * @property string $RouteTableId
 */
class AssociateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     GatewayId?: string,
     *     DryRun?: bool,
     *     SubnetId?: string,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
