<?php

namespace Sunaoka\Aws\Structures\SageMaker\RegisterDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string|null $Description
 * @property string|null $IotThingName
 */
class Device extends Shape
{
    /**
     * @param array{
     *     DeviceName: string,
     *     Description?: string|null,
     *     IotThingName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
