<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstancesHealthStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'>|null $Status
 * @property string|null $NextToken
 */
class GetInstancesHealthStatusResponse extends Response
{
}
