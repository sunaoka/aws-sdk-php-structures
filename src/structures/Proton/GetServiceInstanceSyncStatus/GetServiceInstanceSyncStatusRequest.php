<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceInstanceSyncStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class GetServiceInstanceSyncStatusRequest extends Request
{
    /**
     * @param array{
     *     serviceInstanceName: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
