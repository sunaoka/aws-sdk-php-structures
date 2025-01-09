<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityArn
 * @property string $CreatedAt
 * @property string $DomainName
 * @property list<AwsCertificateManagerCertificateDomainValidationOption> $DomainValidationOptions
 * @property list<AwsCertificateManagerCertificateExtendedKeyUsage> $ExtendedKeyUsages
 * @property string $FailureReason
 * @property string $ImportedAt
 * @property list<string> $InUseBy
 * @property string $IssuedAt
 * @property string $Issuer
 * @property string $KeyAlgorithm
 * @property list<AwsCertificateManagerCertificateKeyUsage> $KeyUsages
 * @property string $NotAfter
 * @property string $NotBefore
 * @property AwsCertificateManagerCertificateOptions $Options
 * @property string $RenewalEligibility
 * @property AwsCertificateManagerCertificateRenewalSummary $RenewalSummary
 * @property string $Serial
 * @property string $SignatureAlgorithm
 * @property string $Status
 * @property string $Subject
 * @property list<string> $SubjectAlternativeNames
 * @property string $Type
 */
class AwsCertificateManagerCertificateDetails extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityArn?: string,
     *     CreatedAt?: string,
     *     DomainName?: string,
     *     DomainValidationOptions?: list<AwsCertificateManagerCertificateDomainValidationOption>,
     *     ExtendedKeyUsages?: list<AwsCertificateManagerCertificateExtendedKeyUsage>,
     *     FailureReason?: string,
     *     ImportedAt?: string,
     *     InUseBy?: list<string>,
     *     IssuedAt?: string,
     *     Issuer?: string,
     *     KeyAlgorithm?: string,
     *     KeyUsages?: list<AwsCertificateManagerCertificateKeyUsage>,
     *     NotAfter?: string,
     *     NotBefore?: string,
     *     Options?: AwsCertificateManagerCertificateOptions,
     *     RenewalEligibility?: string,
     *     RenewalSummary?: AwsCertificateManagerCertificateRenewalSummary,
     *     Serial?: string,
     *     SignatureAlgorithm?: string,
     *     Status?: string,
     *     Subject?: string,
     *     SubjectAlternativeNames?: list<string>,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
