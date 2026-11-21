<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListDiscoveryStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'API_GATEWAY'|'ELB'|'CLOUDFRONT' $discoverySource
 * @property 'STOPPED'|'PROVISIONING'|'RUNNING'|'FAILED' $status
 * @property 'ACCESS_DENIED'|'DEPENDENCY_ERROR'|'THROTTLED'|'INVALID_CONFIGURATION'|'INTERNAL_ERROR'|null $failureReason
 */
class DiscoveryStatus extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     discoverySource: 'API_GATEWAY'|'ELB'|'CLOUDFRONT',
     *     status: 'STOPPED'|'PROVISIONING'|'RUNNING'|'FAILED',
     *     failureReason?: 'ACCESS_DENIED'|'DEPENDENCY_ERROR'|'THROTTLED'|'INVALID_CONFIGURATION'|'INTERNAL_ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
