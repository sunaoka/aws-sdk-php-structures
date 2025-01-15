<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCertificateManagerCertificateDomainValidationOption>|null $DomainValidationOptions
 * @property string|null $RenewalStatus
 * @property string|null $RenewalStatusReason
 * @property string|null $UpdatedAt
 */
class AwsCertificateManagerCertificateRenewalSummary extends Shape
{
    /**
     * @param array{
     *     DomainValidationOptions?: list<AwsCertificateManagerCertificateDomainValidationOption>|null,
     *     RenewalStatus?: string|null,
     *     RenewalStatusReason?: string|null,
     *     UpdatedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
