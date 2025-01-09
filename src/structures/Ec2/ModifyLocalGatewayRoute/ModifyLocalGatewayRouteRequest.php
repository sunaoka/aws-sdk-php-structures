<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyLocalGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationCidrBlock
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property string $NetworkInterfaceId
 * @property bool $DryRun
 * @property string $DestinationPrefixListId
 */
class ModifyLocalGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     LocalGatewayRouteTableId: string,
     *     LocalGatewayVirtualInterfaceGroupId?: string,
     *     NetworkInterfaceId?: string,
     *     DryRun?: bool,
     *     DestinationPrefixListId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
