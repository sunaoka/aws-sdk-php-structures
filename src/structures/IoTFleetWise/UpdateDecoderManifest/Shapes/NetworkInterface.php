<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interfaceId
 * @property 'CAN_INTERFACE'|'OBD_INTERFACE'|'VEHICLE_MIDDLEWARE'|'CUSTOM_DECODING_INTERFACE' $type
 * @property CanInterface $canInterface
 * @property ObdInterface $obdInterface
 * @property VehicleMiddleware $vehicleMiddleware
 * @property CustomDecodingInterface $customDecodingInterface
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     interfaceId: string,
     *     type: 'CAN_INTERFACE'|'OBD_INTERFACE'|'VEHICLE_MIDDLEWARE'|'CUSTOM_DECODING_INTERFACE',
     *     canInterface?: CanInterface,
     *     obdInterface?: ObdInterface,
     *     vehicleMiddleware?: VehicleMiddleware,
     *     customDecodingInterface?: CustomDecodingInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
