<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interfaceId
 * @property 'CAN_INTERFACE'|'OBD_INTERFACE' $type
 * @property CanInterface|null $canInterface
 * @property ObdInterface|null $obdInterface
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     interfaceId: string,
     *     type: 'CAN_INTERFACE'|'OBD_INTERFACE',
     *     canInterface?: CanInterface|null,
     *     obdInterface?: ObdInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
