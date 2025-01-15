<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDeviceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceFleetArn
 * @property string $DeviceFleetName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DeviceFleetSummary extends Shape
{
    /**
     * @param array{
     *     DeviceFleetArn: string,
     *     DeviceFleetName: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
