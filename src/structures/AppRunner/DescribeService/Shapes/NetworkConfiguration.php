<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EgressConfiguration|null $EgressConfiguration
 * @property IngressConfiguration|null $IngressConfiguration
 * @property 'IPV4'|'DUAL_STACK'|null $IpAddressType
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     EgressConfiguration?: EgressConfiguration|null,
     *     IngressConfiguration?: IngressConfiguration|null,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
