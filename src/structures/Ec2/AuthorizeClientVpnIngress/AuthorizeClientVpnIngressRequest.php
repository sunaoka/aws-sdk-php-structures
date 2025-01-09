<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeClientVpnIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $TargetNetworkCidr
 * @property string $AccessGroupId
 * @property bool $AuthorizeAllGroups
 * @property string $Description
 * @property string $ClientToken
 * @property bool $DryRun
 */
class AuthorizeClientVpnIngressRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     TargetNetworkCidr: string,
     *     AccessGroupId?: string,
     *     AuthorizeAllGroups?: bool,
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
