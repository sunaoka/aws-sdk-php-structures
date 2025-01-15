<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DeviceArn
 * @property string $DeviceName
 * @property string|null $Description
 * @property string $DeviceFleetName
 * @property string|null $IotThingName
 * @property \Aws\Api\DateTimeResult $RegistrationTime
 * @property \Aws\Api\DateTimeResult|null $LatestHeartbeat
 * @property list<Shapes\EdgeModel>|null $Models
 * @property int|null $MaxModels
 * @property string|null $NextToken
 * @property string|null $AgentVersion
 */
class DescribeDeviceResponse extends Response
{
}
