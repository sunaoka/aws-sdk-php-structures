<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $Description
 * @property string $IotThingName
 */
class Device extends Shape
{
    /**
     * @param array{
     *     DeviceName: string,
     *     Description?: string,
     *     IotThingName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
