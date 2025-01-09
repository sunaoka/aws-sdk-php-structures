<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationCidrBlock
 * @property string $LocalGatewayRouteTableId
 * @property bool $DryRun
 * @property string $DestinationPrefixListId
 */
class DeleteLocalGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     LocalGatewayRouteTableId: string,
     *     DryRun?: bool,
     *     DestinationPrefixListId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
