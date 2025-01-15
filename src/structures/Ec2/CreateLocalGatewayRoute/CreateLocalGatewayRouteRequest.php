<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationCidrBlock
 * @property string $LocalGatewayRouteTableId
 * @property string|null $LocalGatewayVirtualInterfaceGroupId
 * @property bool|null $DryRun
 * @property string|null $NetworkInterfaceId
 * @property string|null $DestinationPrefixListId
 */
class CreateLocalGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     LocalGatewayRouteTableId: string,
     *     LocalGatewayVirtualInterfaceGroupId?: string|null,
     *     DryRun?: bool|null,
     *     NetworkInterfaceId?: string|null,
     *     DestinationPrefixListId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
