<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationIp
 * @property int $DestinationPort
 * @property InterfaceRequest $Interface
 */
class DestinationConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     DestinationIp: string,
     *     DestinationPort: int,
     *     Interface: InterfaceRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
