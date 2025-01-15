<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vehicleName
 * @property string|null $arn
 * @property string|null $thingArn
 */
class CreateVehicleResponseItem extends Shape
{
    /**
     * @param array{
     *     vehicleName?: string|null,
     *     arn?: string|null,
     *     thingArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
