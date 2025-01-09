<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EgressConfiguration $EgressConfiguration
 * @property IngressConfiguration $IngressConfiguration
 * @property 'IPV4'|'DUAL_STACK' $IpAddressType
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     EgressConfiguration?: EgressConfiguration,
     *     IngressConfiguration?: IngressConfiguration,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
