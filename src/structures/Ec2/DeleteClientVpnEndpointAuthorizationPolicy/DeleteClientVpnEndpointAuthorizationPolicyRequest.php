<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnEndpointAuthorizationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property bool|null $DryRun
 */
class DeleteClientVpnEndpointAuthorizationPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
