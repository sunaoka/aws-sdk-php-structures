<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $DeviceArn
 * @property string|null $Description
 * @property string|null $DeviceFleetName
 * @property string|null $IotThingName
 * @property \Aws\Api\DateTimeResult|null $RegistrationTime
 * @property \Aws\Api\DateTimeResult|null $LatestHeartbeat
 * @property list<EdgeModelSummary>|null $Models
 * @property string|null $AgentVersion
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     DeviceName: string,
     *     DeviceArn: string,
     *     Description?: string|null,
     *     DeviceFleetName?: string|null,
     *     IotThingName?: string|null,
     *     RegistrationTime?: \Aws\Api\DateTimeResult|null,
     *     LatestHeartbeat?: \Aws\Api\DateTimeResult|null,
     *     Models?: list<EdgeModelSummary>|null,
     *     AgentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
