<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property string $arn
 * @property string $thingArn
 */
class CreateVehicleResponseItem extends Shape
{
    /**
     * @param array{
     *     vehicleName?: string,
     *     arn?: string,
     *     thingArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
