<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GatewayId
 * @property bool|null $DryRun
 * @property string|null $SubnetId
 * @property string $RouteTableId
 */
class AssociateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     GatewayId?: string|null,
     *     DryRun?: bool|null,
     *     SubnetId?: string|null,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
