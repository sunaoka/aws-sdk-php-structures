<?php

namespace Sunaoka\Aws\Structures\Ec2\GetClientVpnEndpointAuthorizationPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $PolicyDocument
 * @property string|null $Description
 * @property 'enabled'|'disabled'|null $ShadowMode
 * @property 'creating'|'updating'|'active'|'failed'|'deleting'|null $Status
 */
class GetClientVpnEndpointAuthorizationPolicyResponse extends Response
{
}
