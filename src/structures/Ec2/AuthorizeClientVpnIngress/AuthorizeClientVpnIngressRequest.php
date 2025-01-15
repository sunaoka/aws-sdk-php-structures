<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeClientVpnIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $TargetNetworkCidr
 * @property string|null $AccessGroupId
 * @property bool|null $AuthorizeAllGroups
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class AuthorizeClientVpnIngressRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     TargetNetworkCidr: string,
     *     AccessGroupId?: string|null,
     *     AuthorizeAllGroups?: bool|null,
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
