<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetCoreDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $coreDeviceThingName
 * @property string|null $coreVersion
 * @property string|null $platform
 * @property string|null $architecture
 * @property string|null $runtime
 * @property 'HEALTHY'|'UNHEALTHY'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastStatusUpdateTimestamp
 * @property array<string, string>|null $tags
 */
class GetCoreDeviceResponse extends Response
{
}
