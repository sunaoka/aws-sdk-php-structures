<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyLocalGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationCidrBlock
 * @property string $LocalGatewayRouteTableId
 * @property string|null $LocalGatewayVirtualInterfaceGroupId
 * @property string|null $NetworkInterfaceId
 * @property bool|null $DryRun
 * @property string|null $DestinationPrefixListId
 */
class ModifyLocalGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     LocalGatewayRouteTableId: string,
     *     LocalGatewayVirtualInterfaceGroupId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     DryRun?: bool|null,
     *     DestinationPrefixListId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
