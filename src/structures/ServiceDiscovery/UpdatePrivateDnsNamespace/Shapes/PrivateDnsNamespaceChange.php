<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePrivateDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property PrivateDnsNamespacePropertiesChange|null $Properties
 */
class PrivateDnsNamespaceChange extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Properties?: PrivateDnsNamespacePropertiesChange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
