<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationMetadata|null $newConfigurationMetadata
 */
class ProxyConfigurationUpdateDetails extends Shape
{
    /**
     * @param array{newConfigurationMetadata?: ConfigurationMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
