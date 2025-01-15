<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeClientVpnIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $TargetNetworkCidr
 * @property string|null $AccessGroupId
 * @property bool|null $RevokeAllGroups
 * @property bool|null $DryRun
 */
class RevokeClientVpnIngressRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     TargetNetworkCidr: string,
     *     AccessGroupId?: string|null,
     *     RevokeAllGroups?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
