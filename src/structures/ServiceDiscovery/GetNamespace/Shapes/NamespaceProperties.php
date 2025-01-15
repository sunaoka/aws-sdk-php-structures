<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DnsProperties|null $DnsProperties
 * @property HttpProperties|null $HttpProperties
 */
class NamespaceProperties extends Shape
{
    /**
     * @param array{
     *     DnsProperties?: DnsProperties|null,
     *     HttpProperties?: HttpProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
