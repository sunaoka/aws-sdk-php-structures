<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ACTIVE'|'SIGNED_OUT'|null $Status
 * @property string|null $Model
 * @property string|null $Manufacturer
 * @property string|null $OperatingSystem
 * @property string|null $OperatingSystemVersion
 * @property string|null $PatchLevel
 * @property \Aws\Api\DateTimeResult|null $FirstAccessedTime
 * @property \Aws\Api\DateTimeResult|null $LastAccessedTime
 * @property string|null $Username
 */
class DescribeDeviceResponse extends Response
{
}
