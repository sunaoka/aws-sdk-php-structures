<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Dual-stack'|'IPv4'|'IPv6'|null $NetworkType
 * @property list<string>|null $CustomerDnsIpsV6
 */
class NetworkUpdateSettings extends Shape
{
    /**
     * @param array{
     *     NetworkType?: 'Dual-stack'|'IPv4'|'IPv6'|null,
     *     CustomerDnsIpsV6?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
