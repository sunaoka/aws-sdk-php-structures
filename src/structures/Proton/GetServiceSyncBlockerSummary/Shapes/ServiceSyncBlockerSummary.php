<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncBlockerSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SyncBlocker>|null $latestBlockers
 * @property string|null $serviceInstanceName
 * @property string $serviceName
 */
class ServiceSyncBlockerSummary extends Shape
{
    /**
     * @param array{
     *     latestBlockers?: list<SyncBlocker>|null,
     *     serviceInstanceName?: string|null,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
