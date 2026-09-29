<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClientVpnTrustProvider>|null $TrustProviders
 */
class DevicePostureResponseOptions extends Shape
{
    /**
     * @param array{TrustProviders?: list<ClientVpnTrustProvider>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
