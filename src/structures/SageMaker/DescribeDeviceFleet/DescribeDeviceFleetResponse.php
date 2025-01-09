<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDeviceFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeviceFleetName
 * @property string $DeviceFleetArn
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $RoleArn
 * @property string $IotRoleAlias
 */
class DescribeDeviceFleetResponse extends Response
{
}
