<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationIpv6CidrBlock
 * @property string|null $DestinationPrefixListId
 * @property bool|null $DryRun
 * @property string $RouteTableId
 */
class DeleteRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     DryRun?: bool|null,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
