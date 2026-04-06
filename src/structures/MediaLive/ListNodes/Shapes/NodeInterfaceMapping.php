<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogicalInterfaceName
 * @property 'NAT'|'BRIDGE'|null $NetworkInterfaceMode
 * @property string|null $PhysicalInterfaceName
 * @property list<string>|null $PhysicalInterfaceIpAddresses
 */
class NodeInterfaceMapping extends Shape
{
    /**
     * @param array{
     *     LogicalInterfaceName?: string|null,
     *     NetworkInterfaceMode?: 'NAT'|'BRIDGE'|null,
     *     PhysicalInterfaceName?: string|null,
     *     PhysicalInterfaceIpAddresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
