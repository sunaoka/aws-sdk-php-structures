<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property PublicDnsNamespacePropertiesChange|null $Properties
 */
class PublicDnsNamespaceChange extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Properties?: PublicDnsNamespacePropertiesChange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
