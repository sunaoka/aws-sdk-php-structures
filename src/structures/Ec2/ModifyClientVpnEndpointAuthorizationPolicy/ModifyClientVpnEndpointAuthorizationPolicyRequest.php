<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpointAuthorizationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string|null $PolicyDocument
 * @property string|null $Description
 * @property 'enabled'|'disabled'|null $ShadowMode
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class ModifyClientVpnEndpointAuthorizationPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     PolicyDocument?: string|null,
     *     Description?: string|null,
     *     ShadowMode?: 'enabled'|'disabled'|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
