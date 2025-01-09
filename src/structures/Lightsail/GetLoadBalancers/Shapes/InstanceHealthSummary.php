<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceName
 * @property 'initial'|'healthy'|'unhealthy'|'unused'|'draining'|'unavailable' $instanceHealth
 * @property 'Lb.RegistrationInProgress'|'Lb.InitialHealthChecking'|'Lb.InternalError'|'Instance.ResponseCodeMismatch'|'Instance.Timeout'|'Instance.FailedHealthChecks'|'Instance.NotRegistered'|'Instance.NotInUse'|'Instance.DeregistrationInProgress'|'Instance.InvalidState'|'Instance.IpUnusable' $instanceHealthReason
 */
class InstanceHealthSummary extends Shape
{
    /**
     * @param array{
     *     instanceName?: string,
     *     instanceHealth?: 'initial'|'healthy'|'unhealthy'|'unused'|'draining'|'unavailable',
     *     instanceHealthReason?: 'Lb.RegistrationInProgress'|'Lb.InitialHealthChecking'|'Lb.InternalError'|'Instance.ResponseCodeMismatch'|'Instance.Timeout'|'Instance.FailedHealthChecks'|'Instance.NotRegistered'|'Instance.NotInUse'|'Instance.DeregistrationInProgress'|'Instance.InvalidState'|'Instance.IpUnusable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
