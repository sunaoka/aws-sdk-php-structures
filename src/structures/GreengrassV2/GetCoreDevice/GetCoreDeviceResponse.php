<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetCoreDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $coreDeviceThingName
 * @property string $coreVersion
 * @property string $platform
 * @property string $architecture
 * @property string $runtime
 * @property 'HEALTHY'|'UNHEALTHY' $status
 * @property \Aws\Api\DateTimeResult $lastStatusUpdateTimestamp
 * @property array<string, string> $tags
 */
class GetCoreDeviceResponse extends Response
{
}
