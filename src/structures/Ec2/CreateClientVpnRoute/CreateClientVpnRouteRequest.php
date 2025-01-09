<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $DestinationCidrBlock
 * @property string $TargetVpcSubnetId
 * @property string $Description
 * @property string $ClientToken
 * @property bool $DryRun
 */
class CreateClientVpnRouteRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     DestinationCidrBlock: string,
     *     TargetVpcSubnetId: string,
     *     Description?: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
