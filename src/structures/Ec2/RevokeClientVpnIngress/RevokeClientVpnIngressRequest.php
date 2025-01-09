<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeClientVpnIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $TargetNetworkCidr
 * @property string $AccessGroupId
 * @property bool $RevokeAllGroups
 * @property bool $DryRun
 */
class RevokeClientVpnIngressRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     TargetNetworkCidr: string,
     *     AccessGroupId?: string,
     *     RevokeAllGroups?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
