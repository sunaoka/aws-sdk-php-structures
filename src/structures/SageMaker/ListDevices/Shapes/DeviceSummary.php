<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $DeviceArn
 * @property string $Description
 * @property string $DeviceFleetName
 * @property string $IotThingName
 * @property \Aws\Api\DateTimeResult $RegistrationTime
 * @property \Aws\Api\DateTimeResult $LatestHeartbeat
 * @property list<EdgeModelSummary> $Models
 * @property string $AgentVersion
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     DeviceName: string,
     *     DeviceArn: string,
     *     Description?: string,
     *     DeviceFleetName?: string,
     *     IotThingName?: string,
     *     RegistrationTime?: \Aws\Api\DateTimeResult,
     *     LatestHeartbeat?: \Aws\Api\DateTimeResult,
     *     Models?: list<EdgeModelSummary>,
     *     AgentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
