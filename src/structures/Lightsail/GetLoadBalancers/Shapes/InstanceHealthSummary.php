<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceName
 * @property 'initial'|'healthy'|'unhealthy'|'unused'|'draining'|'unavailable'|null $instanceHealth
 * @property 'Lb.RegistrationInProgress'|'Lb.InitialHealthChecking'|'Lb.InternalError'|'Instance.ResponseCodeMismatch'|'Instance.Timeout'|'Instance.FailedHealthChecks'|'Instance.NotRegistered'|'Instance.NotInUse'|'Instance.DeregistrationInProgress'|'Instance.InvalidState'|'Instance.IpUnusable'|null $instanceHealthReason
 */
class InstanceHealthSummary extends Shape
{
    /**
     * @param array{
     *     instanceName?: string|null,
     *     instanceHealth?: 'initial'|'healthy'|'unhealthy'|'unused'|'draining'|'unavailable'|null,
     *     instanceHealthReason?: 'Lb.RegistrationInProgress'|'Lb.InitialHealthChecking'|'Lb.InternalError'|'Instance.ResponseCodeMismatch'|'Instance.Timeout'|'Instance.FailedHealthChecks'|'Instance.NotRegistered'|'Instance.NotInUse'|'Instance.DeregistrationInProgress'|'Instance.InvalidState'|'Instance.IpUnusable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
