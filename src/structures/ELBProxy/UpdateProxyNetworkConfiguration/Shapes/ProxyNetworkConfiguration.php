<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProxyIpConfiguration $ipConfiguration
 * @property ProxyVpcConfiguration $vpcConfiguration
 */
class ProxyNetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     ipConfiguration: ProxyIpConfiguration,
     *     vpcConfiguration: ProxyVpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
