<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED' $renewalStatus
 * @property list<LoadBalancerTlsCertificateDomainValidationOption> $domainValidationOptions
 */
class LoadBalancerTlsCertificateRenewalSummary extends Shape
{
    /**
     * @param array{
     *     renewalStatus?: 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED',
     *     domainValidationOptions?: list<LoadBalancerTlsCertificateDomainValidationOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
