<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateHttpNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 */
class HttpNamespaceChange extends Shape
{
    /**
     * @param array{Description: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
