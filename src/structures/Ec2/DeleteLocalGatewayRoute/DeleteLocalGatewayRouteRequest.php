<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationCidrBlock
 * @property string $LocalGatewayRouteTableId
 * @property bool|null $DryRun
 * @property string|null $DestinationPrefixListId
 */
class DeleteLocalGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     LocalGatewayRouteTableId: string,
     *     DryRun?: bool|null,
     *     DestinationPrefixListId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
