<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstancesHealthStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'> $Status
 * @property string $NextToken
 */
class GetInstancesHealthStatusResponse extends Response
{
}
