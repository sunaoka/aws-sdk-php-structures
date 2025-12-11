<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RegionNames
 * @property list<'PUBLIC'|'VPC'>|null $NetworkInterfaceTypes
 * @property list<string>|null $NameContains
 */
class RouterNetworkInterfaceFilter extends Shape
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     NetworkInterfaceTypes?: list<'PUBLIC'|'VPC'>|null,
     *     NameContains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
