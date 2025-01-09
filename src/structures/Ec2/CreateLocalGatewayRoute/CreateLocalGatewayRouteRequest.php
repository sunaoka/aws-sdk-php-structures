<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationCidrBlock
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 * @property string $DestinationPrefixListId
 */
class CreateLocalGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     LocalGatewayRouteTableId: string,
     *     LocalGatewayVirtualInterfaceGroupId?: string,
     *     DryRun?: bool,
     *     NetworkInterfaceId?: string,
     *     DestinationPrefixListId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
