<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProxyIpAddressingConfiguration $ipAddressingConfiguration
 */
class ProxyIpConfiguration extends Shape
{
    /**
     * @param array{ipAddressingConfiguration: ProxyIpAddressingConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
