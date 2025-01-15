<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDeviceFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeviceFleetName
 * @property string $DeviceFleetArn
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $RoleArn
 * @property string|null $IotRoleAlias
 */
class DescribeDeviceFleetResponse extends Response
{
}
