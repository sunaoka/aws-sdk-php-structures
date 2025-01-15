<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDeviceJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $DeviceArn
 * @property string|null $DeviceId
 * @property string|null $DeviceName
 * @property 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE'|null $DeviceType
 * @property string|null $ImageVersion
 * @property string|null $JobId
 * @property 'OTA'|'REBOOT'|null $JobType
 * @property 'PENDING'|'IN_PROGRESS'|'VERIFYING'|'REBOOTING'|'DOWNLOADING'|'COMPLETED'|'FAILED'|null $Status
 */
class DescribeDeviceJobResponse extends Response
{
}
