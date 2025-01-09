<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDeviceJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $DeviceArn
 * @property string $DeviceId
 * @property string $DeviceName
 * @property 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE' $DeviceType
 * @property string $ImageVersion
 * @property string $JobId
 * @property 'OTA'|'REBOOT' $JobType
 * @property 'PENDING'|'IN_PROGRESS'|'VERIFYING'|'REBOOTING'|'DOWNLOADING'|'COMPLETED'|'FAILED' $Status
 */
class DescribeDeviceJobResponse extends Response
{
}
