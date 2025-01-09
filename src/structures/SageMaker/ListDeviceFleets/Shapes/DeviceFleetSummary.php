<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDeviceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceFleetArn
 * @property string $DeviceFleetName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DeviceFleetSummary extends Shape
{
    /**
     * @param array{
     *     DeviceFleetArn: string,
     *     DeviceFleetName: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
