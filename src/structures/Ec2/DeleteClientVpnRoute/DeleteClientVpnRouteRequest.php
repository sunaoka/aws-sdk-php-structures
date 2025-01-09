<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $TargetVpcSubnetId
 * @property string $DestinationCidrBlock
 * @property bool $DryRun
 */
class DeleteClientVpnRouteRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     TargetVpcSubnetId?: string,
     *     DestinationCidrBlock: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
