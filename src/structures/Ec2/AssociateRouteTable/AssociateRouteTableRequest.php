<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $RouteTableId
 * @property string|null $SubnetId
 * @property string|null $GatewayId
 */
class AssociateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     RouteTableId: string,
     *     SubnetId?: string|null,
     *     GatewayId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
