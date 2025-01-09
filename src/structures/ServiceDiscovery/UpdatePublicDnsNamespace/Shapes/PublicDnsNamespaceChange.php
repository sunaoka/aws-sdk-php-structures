<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property PublicDnsNamespacePropertiesChange $Properties
 */
class PublicDnsNamespaceChange extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Properties?: PublicDnsNamespacePropertiesChange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
