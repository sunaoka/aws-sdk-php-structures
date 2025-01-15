<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $type
 * @property string|null $value
 * @property 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'|null $validationStatus
 * @property string|null $domainName
 * @property LoadBalancerTlsCertificateDnsRecordCreationState|null $dnsRecordCreationState
 */
class LoadBalancerTlsCertificateDomainValidationRecord extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: string|null,
     *     value?: string|null,
     *     validationStatus?: 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'|null,
     *     domainName?: string|null,
     *     dnsRecordCreationState?: LoadBalancerTlsCertificateDnsRecordCreationState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
