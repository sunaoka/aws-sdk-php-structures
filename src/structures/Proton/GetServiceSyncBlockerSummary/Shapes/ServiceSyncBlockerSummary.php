<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncBlockerSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SyncBlocker> $latestBlockers
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ServiceSyncBlockerSummary extends Shape
{
    /**
     * @param array{
     *     latestBlockers?: list<SyncBlocker>,
     *     serviceInstanceName?: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
