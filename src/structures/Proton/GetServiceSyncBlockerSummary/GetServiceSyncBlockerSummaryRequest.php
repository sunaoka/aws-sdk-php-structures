<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncBlockerSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class GetServiceSyncBlockerSummaryRequest extends Request
{
    /**
     * @param array{
     *     serviceInstanceName?: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
