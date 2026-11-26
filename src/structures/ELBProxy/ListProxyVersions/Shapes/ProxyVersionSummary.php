<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListProxyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'envoy' $type
 * @property string $version
 */
class ProxyVersionSummary extends Shape
{
    /**
     * @param array{
     *     type: 'envoy',
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
