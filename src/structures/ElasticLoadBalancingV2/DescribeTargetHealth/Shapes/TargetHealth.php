<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'initial'|'healthy'|'unhealthy'|'unhealthy.draining'|'unused'|'draining'|'unavailable'|null $State
 * @property 'Elb.RegistrationInProgress'|'Elb.InitialHealthChecking'|'Target.ResponseCodeMismatch'|'Target.Timeout'|'Target.FailedHealthChecks'|'Target.NotRegistered'|'Target.NotInUse'|'Target.DeregistrationInProgress'|'Target.InvalidState'|'Target.IpUnusable'|'Target.HealthCheckDisabled'|'Elb.InternalError'|null $Reason
 * @property string|null $Description
 */
class TargetHealth extends Shape
{
    /**
     * @param array{
     *     State?: 'initial'|'healthy'|'unhealthy'|'unhealthy.draining'|'unused'|'draining'|'unavailable'|null,
     *     Reason?: 'Elb.RegistrationInProgress'|'Elb.InitialHealthChecking'|'Target.ResponseCodeMismatch'|'Target.Timeout'|'Target.FailedHealthChecks'|'Target.NotRegistered'|'Target.NotInUse'|'Target.DeregistrationInProgress'|'Target.InvalidState'|'Target.IpUnusable'|'Target.HealthCheckDisabled'|'Elb.InternalError'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
