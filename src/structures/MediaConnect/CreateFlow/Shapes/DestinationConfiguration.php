<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationIp
 * @property int $DestinationPort
 * @property InterfaceShape $Interface
 * @property string $OutboundIp
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationIp: string,
     *     DestinationPort: int,
     *     Interface: InterfaceShape,
     *     OutboundIp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
