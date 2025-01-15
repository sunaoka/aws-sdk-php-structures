<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateAuthorityArn
 * @property string|null $CreatedAt
 * @property string|null $DomainName
 * @property list<AwsCertificateManagerCertificateDomainValidationOption>|null $DomainValidationOptions
 * @property list<AwsCertificateManagerCertificateExtendedKeyUsage>|null $ExtendedKeyUsages
 * @property string|null $FailureReason
 * @property string|null $ImportedAt
 * @property list<string>|null $InUseBy
 * @property string|null $IssuedAt
 * @property string|null $Issuer
 * @property string|null $KeyAlgorithm
 * @property list<AwsCertificateManagerCertificateKeyUsage>|null $KeyUsages
 * @property string|null $NotAfter
 * @property string|null $NotBefore
 * @property AwsCertificateManagerCertificateOptions|null $Options
 * @property string|null $RenewalEligibility
 * @property AwsCertificateManagerCertificateRenewalSummary|null $RenewalSummary
 * @property string|null $Serial
 * @property string|null $SignatureAlgorithm
 * @property string|null $Status
 * @property string|null $Subject
 * @property list<string>|null $SubjectAlternativeNames
 * @property string|null $Type
 */
class AwsCertificateManagerCertificateDetails extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityArn?: string|null,
     *     CreatedAt?: string|null,
     *     DomainName?: string|null,
     *     DomainValidationOptions?: list<AwsCertificateManagerCertificateDomainValidationOption>|null,
     *     ExtendedKeyUsages?: list<AwsCertificateManagerCertificateExtendedKeyUsage>|null,
     *     FailureReason?: string|null,
     *     ImportedAt?: string|null,
     *     InUseBy?: list<string>|null,
     *     IssuedAt?: string|null,
     *     Issuer?: string|null,
     *     KeyAlgorithm?: string|null,
     *     KeyUsages?: list<AwsCertificateManagerCertificateKeyUsage>|null,
     *     NotAfter?: string|null,
     *     NotBefore?: string|null,
     *     Options?: AwsCertificateManagerCertificateOptions|null,
     *     RenewalEligibility?: string|null,
     *     RenewalSummary?: AwsCertificateManagerCertificateRenewalSummary|null,
     *     Serial?: string|null,
     *     SignatureAlgorithm?: string|null,
     *     Status?: string|null,
     *     Subject?: string|null,
     *     SubjectAlternativeNames?: list<string>|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
