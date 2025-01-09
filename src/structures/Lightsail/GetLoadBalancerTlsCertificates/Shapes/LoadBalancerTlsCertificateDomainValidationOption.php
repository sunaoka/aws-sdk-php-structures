<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property 'PENDING_VALIDATION'|'FAILED'|'SUCCESS' $validationStatus
 */
class LoadBalancerTlsCertificateDomainValidationOption extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     validationStatus?: 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
