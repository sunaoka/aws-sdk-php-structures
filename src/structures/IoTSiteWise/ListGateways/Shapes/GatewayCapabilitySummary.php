<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capabilityNamespace
 * @property 'IN_SYNC'|'OUT_OF_SYNC'|'SYNC_FAILED'|'UNKNOWN'|'NOT_APPLICABLE' $capabilitySyncStatus
 */
class GatewayCapabilitySummary extends Shape
{
    /**
     * @param array{
     *     capabilityNamespace: string,
     *     capabilitySyncStatus: 'IN_SYNC'|'OUT_OF_SYNC'|'SYNC_FAILED'|'UNKNOWN'|'NOT_APPLICABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
