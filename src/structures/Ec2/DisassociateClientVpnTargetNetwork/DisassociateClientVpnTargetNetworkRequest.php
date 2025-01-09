<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateClientVpnTargetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $AssociationId
 * @property bool $DryRun
 */
class DisassociateClientVpnTargetNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     AssociationId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
