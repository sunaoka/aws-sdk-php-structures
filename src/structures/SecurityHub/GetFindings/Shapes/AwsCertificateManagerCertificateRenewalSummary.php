<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCertificateManagerCertificateDomainValidationOption> $DomainValidationOptions
 * @property string $RenewalStatus
 * @property string $RenewalStatusReason
 * @property string $UpdatedAt
 */
class AwsCertificateManagerCertificateRenewalSummary extends Shape
{
    /**
     * @param array{
     *     DomainValidationOptions?: list<AwsCertificateManagerCertificateDomainValidationOption>,
     *     RenewalStatus?: string,
     *     RenewalStatusReason?: string,
     *     UpdatedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
