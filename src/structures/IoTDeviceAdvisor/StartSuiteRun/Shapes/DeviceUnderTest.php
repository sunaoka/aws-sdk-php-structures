<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StartSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingArn
 * @property string $certificateArn
 * @property string $deviceRoleArn
 */
class DeviceUnderTest extends Shape
{
    /**
     * @param array{
     *     thingArn?: string,
     *     certificateArn?: string,
     *     deviceRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
