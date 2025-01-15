<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\CreateSuiteDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingArn
 * @property string|null $certificateArn
 * @property string|null $deviceRoleArn
 */
class DeviceUnderTest extends Shape
{
    /**
     * @param array{
     *     thingArn?: string|null,
     *     certificateArn?: string|null,
     *     deviceRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
