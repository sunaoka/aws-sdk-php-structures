<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'crowdstrike'|'jamf'|'jumpcloud'|null $TrustProviderType
 * @property string|null $TenantId
 * @property string|null $PublicSigningKeyUrl
 */
class ClientVpnTrustProviderRequest extends Shape
{
    /**
     * @param array{
     *     TrustProviderType?: 'crowdstrike'|'jamf'|'jumpcloud'|null,
     *     TenantId?: string|null,
     *     PublicSigningKeyUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
