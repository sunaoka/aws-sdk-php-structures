<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property int $code
 * @property string $message
 */
class UpdateVehicleError extends Shape
{
    /**
     * @param array{
     *     vehicleName?: string,
     *     code?: int,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
