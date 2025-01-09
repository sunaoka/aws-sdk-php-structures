<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateInstanceCustomHealthStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property string $InstanceId
 * @property 'HEALTHY'|'UNHEALTHY' $Status
 */
class UpdateInstanceCustomHealthStatusRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     InstanceId: string,
     *     Status: 'HEALTHY'|'UNHEALTHY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
