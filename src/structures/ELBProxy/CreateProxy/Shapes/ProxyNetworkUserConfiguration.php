<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProxyIpConfiguration $ipConfiguration
 * @property ProxyVpcUserConfiguration $vpcConfiguration
 */
class ProxyNetworkUserConfiguration extends Shape
{
    /**
     * @param array{
     *     ipConfiguration: ProxyIpConfiguration,
     *     vpcConfiguration: ProxyVpcUserConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
