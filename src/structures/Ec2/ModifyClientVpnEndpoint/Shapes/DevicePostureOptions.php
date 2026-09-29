<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClientVpnTrustProviderRequest>|null $TrustProviders
 * @property bool|null $Enabled
 */
class DevicePostureOptions extends Shape
{
    /**
     * @param array{
     *     TrustProviders?: list<ClientVpnTrustProviderRequest>|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
