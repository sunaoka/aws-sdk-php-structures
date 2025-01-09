<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DnsProperties $DnsProperties
 * @property HttpProperties $HttpProperties
 */
class NamespaceProperties extends Shape
{
    /**
     * @param array{
     *     DnsProperties?: DnsProperties,
     *     HttpProperties?: HttpProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
