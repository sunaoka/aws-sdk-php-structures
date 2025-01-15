<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string|null $TargetVpcSubnetId
 * @property string $DestinationCidrBlock
 * @property bool|null $DryRun
 */
class DeleteClientVpnRouteRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     TargetVpcSubnetId?: string|null,
     *     DestinationCidrBlock: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
