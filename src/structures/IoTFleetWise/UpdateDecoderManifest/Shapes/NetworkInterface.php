<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interfaceId
 * @property 'CAN_INTERFACE'|'OBD_INTERFACE'|'VEHICLE_MIDDLEWARE' $type
 * @property CanInterface|null $canInterface
 * @property ObdInterface|null $obdInterface
 * @property VehicleMiddleware|null $vehicleMiddleware
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     interfaceId: string,
     *     type: 'CAN_INTERFACE'|'OBD_INTERFACE'|'VEHICLE_MIDDLEWARE',
     *     canInterface?: CanInterface|null,
     *     obdInterface?: ObdInterface|null,
     *     vehicleMiddleware?: VehicleMiddleware|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
