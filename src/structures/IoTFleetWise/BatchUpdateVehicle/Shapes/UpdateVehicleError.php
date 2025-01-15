<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vehicleName
 * @property int|null $code
 * @property string|null $message
 */
class UpdateVehicleError extends Shape
{
    /**
     * @param array{
     *     vehicleName?: string|null,
     *     code?: int|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
