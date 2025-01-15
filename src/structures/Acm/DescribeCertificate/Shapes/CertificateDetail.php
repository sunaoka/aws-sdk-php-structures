<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $DomainName
 * @property list<string>|null $SubjectAlternativeNames
 * @property list<DomainValidation>|null $DomainValidationOptions
 * @property string|null $Serial
 * @property string|null $Subject
 * @property string|null $Issuer
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $IssuedAt
 * @property \Aws\Api\DateTimeResult|null $ImportedAt
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $RevokedAt
 * @property 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE'|null $RevocationReason
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null $KeyAlgorithm
 * @property string|null $SignatureAlgorithm
 * @property list<string>|null $InUseBy
 * @property 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'DOMAIN_VALIDATION_DENIED'|'CAA_ERROR'|'PCA_LIMIT_EXCEEDED'|'PCA_INVALID_ARN'|'PCA_INVALID_STATE'|'PCA_REQUEST_FAILED'|'PCA_NAME_CONSTRAINTS_VALIDATION'|'PCA_RESOURCE_NOT_FOUND'|'PCA_INVALID_ARGS'|'PCA_INVALID_DURATION'|'PCA_ACCESS_DENIED'|'SLR_NOT_FOUND'|'OTHER'|null $FailureReason
 * @property 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null $Type
 * @property RenewalSummary|null $RenewalSummary
 * @property list<KeyUsage>|null $KeyUsages
 * @property list<ExtendedKeyUsage>|null $ExtendedKeyUsages
 * @property string|null $CertificateAuthorityArn
 * @property 'ELIGIBLE'|'INELIGIBLE'|null $RenewalEligibility
 * @property CertificateOptions|null $Options
 */
class CertificateDetail extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     DomainName?: string|null,
     *     SubjectAlternativeNames?: list<string>|null,
     *     DomainValidationOptions?: list<DomainValidation>|null,
     *     Serial?: string|null,
     *     Subject?: string|null,
     *     Issuer?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     IssuedAt?: \Aws\Api\DateTimeResult|null,
     *     ImportedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null,
     *     RevokedAt?: \Aws\Api\DateTimeResult|null,
     *     RevocationReason?: 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE'|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null,
     *     SignatureAlgorithm?: string|null,
     *     InUseBy?: list<string>|null,
     *     FailureReason?: 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'DOMAIN_VALIDATION_DENIED'|'CAA_ERROR'|'PCA_LIMIT_EXCEEDED'|'PCA_INVALID_ARN'|'PCA_INVALID_STATE'|'PCA_REQUEST_FAILED'|'PCA_NAME_CONSTRAINTS_VALIDATION'|'PCA_RESOURCE_NOT_FOUND'|'PCA_INVALID_ARGS'|'PCA_INVALID_DURATION'|'PCA_ACCESS_DENIED'|'SLR_NOT_FOUND'|'OTHER'|null,
     *     Type?: 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null,
     *     RenewalSummary?: RenewalSummary|null,
     *     KeyUsages?: list<KeyUsage>|null,
     *     ExtendedKeyUsages?: list<ExtendedKeyUsage>|null,
     *     CertificateAuthorityArn?: string|null,
     *     RenewalEligibility?: 'ELIGIBLE'|'INELIGIBLE'|null,
     *     Options?: CertificateOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
