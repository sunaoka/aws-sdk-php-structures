<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProxyConfigurationUpdateDetails|null $configuration
 */
class ProxyUpdateDetails extends Shape
{
    /**
     * @param array{configuration?: ProxyConfigurationUpdateDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
