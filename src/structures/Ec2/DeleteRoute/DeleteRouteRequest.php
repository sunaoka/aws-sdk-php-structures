<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationPrefixListId
 * @property bool|null $DryRun
 * @property string $RouteTableId
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationIpv6CidrBlock
 */
class DeleteRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationPrefixListId?: string|null,
     *     DryRun?: bool|null,
     *     RouteTableId: string,
     *     DestinationCidrBlock?: string|null,
     *     DestinationIpv6CidrBlock?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
