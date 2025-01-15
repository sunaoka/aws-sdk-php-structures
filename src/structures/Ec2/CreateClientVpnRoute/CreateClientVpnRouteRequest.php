<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $DestinationCidrBlock
 * @property string $TargetVpcSubnetId
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class CreateClientVpnRouteRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     DestinationCidrBlock: string,
     *     TargetVpcSubnetId: string,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
