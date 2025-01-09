<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property ResourceRecord $resourceRecord
 * @property DnsRecordCreationState $dnsRecordCreationState
 * @property 'PENDING_VALIDATION'|'FAILED'|'SUCCESS' $validationStatus
 */
class DomainValidationRecord extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     resourceRecord?: ResourceRecord,
     *     dnsRecordCreationState?: DnsRecordCreationState,
     *     validationStatus?: 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
