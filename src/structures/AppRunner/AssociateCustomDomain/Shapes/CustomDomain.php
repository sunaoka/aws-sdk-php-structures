<?php

namespace Sunaoka\Aws\Structures\AppRunner\AssociateCustomDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property bool $EnableWWWSubdomain
 * @property list<CertificateValidationRecord> $CertificateValidationRecords
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'PENDING_CERTIFICATE_DNS_VALIDATION'|'BINDING_CERTIFICATE' $Status
 */
class CustomDomain extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     EnableWWWSubdomain: bool,
     *     CertificateValidationRecords?: list<CertificateValidationRecord>,
     *     Status: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'PENDING_CERTIFICATE_DNS_VALIDATION'|'BINDING_CERTIFICATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
