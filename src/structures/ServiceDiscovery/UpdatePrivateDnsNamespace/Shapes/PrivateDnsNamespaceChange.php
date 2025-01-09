<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePrivateDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property PrivateDnsNamespacePropertiesChange $Properties
 */
class PrivateDnsNamespaceChange extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Properties?: PrivateDnsNamespacePropertiesChange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
