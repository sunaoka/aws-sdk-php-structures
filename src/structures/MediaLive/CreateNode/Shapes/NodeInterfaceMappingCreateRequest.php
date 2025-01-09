<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogicalInterfaceName
 * @property 'NAT'|'BRIDGE' $NetworkInterfaceMode
 * @property string $PhysicalInterfaceName
 */
class NodeInterfaceMappingCreateRequest extends Shape
{
    /**
     * @param array{
     *     LogicalInterfaceName?: string,
     *     NetworkInterfaceMode?: 'NAT'|'BRIDGE',
     *     PhysicalInterfaceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
