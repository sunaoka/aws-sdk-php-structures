<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeviceArn
 * @property string $DeviceName
 * @property string $Description
 * @property string $DeviceFleetName
 * @property string $IotThingName
 * @property \Aws\Api\DateTimeResult $RegistrationTime
 * @property \Aws\Api\DateTimeResult $LatestHeartbeat
 * @property list<Shapes\EdgeModel> $Models
 * @property int $MaxModels
 * @property string $NextToken
 * @property string $AgentVersion
 */
class DescribeDeviceResponse extends Response
{
}
