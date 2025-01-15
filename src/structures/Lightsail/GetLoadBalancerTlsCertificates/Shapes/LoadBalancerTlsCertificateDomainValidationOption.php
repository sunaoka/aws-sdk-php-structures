<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'|null $validationStatus
 */
class LoadBalancerTlsCertificateDomainValidationOption extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     validationStatus?: 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
