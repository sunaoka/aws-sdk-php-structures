<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPrefixListId
 * @property bool $DryRun
 * @property string $RouteTableId
 * @property string $DestinationCidrBlock
 * @property string $DestinationIpv6CidrBlock
 */
class DeleteRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationPrefixListId?: string,
     *     DryRun?: bool,
     *     RouteTableId: string,
     *     DestinationCidrBlock?: string,
     *     DestinationIpv6CidrBlock?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
