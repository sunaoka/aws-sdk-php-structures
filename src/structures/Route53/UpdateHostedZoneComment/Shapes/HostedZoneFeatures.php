<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneComment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLE_FAILED'|'ENABLING_HOSTED_ZONE_LOCKED'|'ENABLED'|'DISABLING'|'DISABLE_FAILED'|'DISABLED'|'DISABLING_HOSTED_ZONE_LOCKED'|null $AcceleratedRecoveryStatus
 * @property 'ENABLED'|'DISABLED'|'ENABLING'|'DISABLING'|null $PublicDNSFallbackStatus
 * @property ChangeHistoryFeature|null $ChangeHistory
 * @property HostedZoneFailureReasons|null $FailureReasons
 * @property list<ChangeGuardrail>|null $ChangeGuardrails
 */
class HostedZoneFeatures extends Shape
{
    /**
     * @param array{
     *     AcceleratedRecoveryStatus?: 'ENABLING'|'ENABLE_FAILED'|'ENABLING_HOSTED_ZONE_LOCKED'|'ENABLED'|'DISABLING'|'DISABLE_FAILED'|'DISABLED'|'DISABLING_HOSTED_ZONE_LOCKED'|null,
     *     PublicDNSFallbackStatus?: 'ENABLED'|'DISABLED'|'ENABLING'|'DISABLING'|null,
     *     ChangeHistory?: ChangeHistoryFeature|null,
     *     FailureReasons?: HostedZoneFailureReasons|null,
     *     ChangeGuardrails?: list<ChangeGuardrail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
