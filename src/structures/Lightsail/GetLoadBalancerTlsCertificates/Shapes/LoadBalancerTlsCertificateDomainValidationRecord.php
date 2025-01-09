<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property string $value
 * @property 'PENDING_VALIDATION'|'FAILED'|'SUCCESS' $validationStatus
 * @property string $domainName
 * @property LoadBalancerTlsCertificateDnsRecordCreationState $dnsRecordCreationState
 */
class LoadBalancerTlsCertificateDomainValidationRecord extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: string,
     *     value?: string,
     *     validationStatus?: 'PENDING_VALIDATION'|'FAILED'|'SUCCESS',
     *     domainName?: string,
     *     dnsRecordCreationState?: LoadBalancerTlsCertificateDnsRecordCreationState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
