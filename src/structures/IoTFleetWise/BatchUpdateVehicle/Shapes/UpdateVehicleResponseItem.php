<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vehicleName
 * @property string|null $arn
 */
class UpdateVehicleResponseItem extends Shape
{
    /**
     * @param array{
     *     vehicleName?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
