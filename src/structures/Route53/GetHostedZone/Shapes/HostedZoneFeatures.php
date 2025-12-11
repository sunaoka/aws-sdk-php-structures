<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLE_FAILED'|'ENABLING_HOSTED_ZONE_LOCKED'|'ENABLED'|'DISABLING'|'DISABLE_FAILED'|'DISABLED'|'DISABLING_HOSTED_ZONE_LOCKED'|null $AcceleratedRecoveryStatus
 * @property HostedZoneFailureReasons|null $FailureReasons
 */
class HostedZoneFeatures extends Shape
{
    /**
     * @param array{
     *     AcceleratedRecoveryStatus?: 'ENABLING'|'ENABLE_FAILED'|'ENABLING_HOSTED_ZONE_LOCKED'|'ENABLED'|'DISABLING'|'DISABLE_FAILED'|'DISABLED'|'DISABLING_HOSTED_ZONE_LOCKED'|null,
     *     FailureReasons?: HostedZoneFailureReasons|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
