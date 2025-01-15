<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property ResourceRecord|null $resourceRecord
 * @property DnsRecordCreationState|null $dnsRecordCreationState
 * @property 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'|null $validationStatus
 */
class DomainValidationRecord extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     resourceRecord?: ResourceRecord|null,
     *     dnsRecordCreationState?: DnsRecordCreationState|null,
     *     validationStatus?: 'PENDING_VALIDATION'|'FAILED'|'SUCCESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
