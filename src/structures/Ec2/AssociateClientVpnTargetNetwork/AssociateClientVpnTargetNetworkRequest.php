<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateClientVpnTargetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $SubnetId
 * @property string $ClientToken
 * @property bool $DryRun
 */
class AssociateClientVpnTargetNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     SubnetId: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
