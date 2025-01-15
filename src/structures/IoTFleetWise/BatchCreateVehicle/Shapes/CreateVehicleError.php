<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vehicleName
 * @property string|null $code
 * @property string|null $message
 */
class CreateVehicleError extends Shape
{
    /**
     * @param array{
     *     vehicleName?: string|null,
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
