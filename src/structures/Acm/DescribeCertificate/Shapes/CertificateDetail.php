<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $DomainName
 * @property list<string> $SubjectAlternativeNames
 * @property list<DomainValidation> $DomainValidationOptions
 * @property string $Serial
 * @property string $Subject
 * @property string $Issuer
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $IssuedAt
 * @property \Aws\Api\DateTimeResult $ImportedAt
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $RevokedAt
 * @property 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE' $RevocationReason
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1' $KeyAlgorithm
 * @property string $SignatureAlgorithm
 * @property list<string> $InUseBy
 * @property 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'DOMAIN_VALIDATION_DENIED'|'CAA_ERROR'|'PCA_LIMIT_EXCEEDED'|'PCA_INVALID_ARN'|'PCA_INVALID_STATE'|'PCA_REQUEST_FAILED'|'PCA_NAME_CONSTRAINTS_VALIDATION'|'PCA_RESOURCE_NOT_FOUND'|'PCA_INVALID_ARGS'|'PCA_INVALID_DURATION'|'PCA_ACCESS_DENIED'|'SLR_NOT_FOUND'|'OTHER' $FailureReason
 * @property 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE' $Type
 * @property RenewalSummary $RenewalSummary
 * @property list<KeyUsage> $KeyUsages
 * @property list<ExtendedKeyUsage> $ExtendedKeyUsages
 * @property string $CertificateAuthorityArn
 * @property 'ELIGIBLE'|'INELIGIBLE' $RenewalEligibility
 * @property CertificateOptions $Options
 */
class CertificateDetail extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     DomainName?: string,
     *     SubjectAlternativeNames?: list<string>,
     *     DomainValidationOptions?: list<DomainValidation>,
     *     Serial?: string,
     *     Subject?: string,
     *     Issuer?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     IssuedAt?: \Aws\Api\DateTimeResult,
     *     ImportedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED',
     *     RevokedAt?: \Aws\Api\DateTimeResult,
     *     RevocationReason?: 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE',
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1',
     *     SignatureAlgorithm?: string,
     *     InUseBy?: list<string>,
     *     FailureReason?: 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'DOMAIN_VALIDATION_DENIED'|'CAA_ERROR'|'PCA_LIMIT_EXCEEDED'|'PCA_INVALID_ARN'|'PCA_INVALID_STATE'|'PCA_REQUEST_FAILED'|'PCA_NAME_CONSTRAINTS_VALIDATION'|'PCA_RESOURCE_NOT_FOUND'|'PCA_INVALID_ARGS'|'PCA_INVALID_DURATION'|'PCA_ACCESS_DENIED'|'SLR_NOT_FOUND'|'OTHER',
     *     Type?: 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE',
     *     RenewalSummary?: RenewalSummary,
     *     KeyUsages?: list<KeyUsage>,
     *     ExtendedKeyUsages?: list<ExtendedKeyUsage>,
     *     CertificateAuthorityArn?: string,
     *     RenewalEligibility?: 'ELIGIBLE'|'INELIGIBLE',
     *     Options?: CertificateOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
