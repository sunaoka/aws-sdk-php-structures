<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateClientVpnTargetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $SubnetId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class AssociateClientVpnTargetNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     SubnetId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
