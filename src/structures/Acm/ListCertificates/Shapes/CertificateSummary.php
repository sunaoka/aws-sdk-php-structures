<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $DomainName
 * @property list<string> $SubjectAlternativeNameSummaries
 * @property bool $HasAdditionalSubjectAlternativeNames
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED' $Status
 * @property 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE' $Type
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1' $KeyAlgorithm
 * @property list<'DIGITAL_SIGNATURE'|'NON_REPUDIATION'|'KEY_ENCIPHERMENT'|'DATA_ENCIPHERMENT'|'KEY_AGREEMENT'|'CERTIFICATE_SIGNING'|'CRL_SIGNING'|'ENCIPHER_ONLY'|'DECIPHER_ONLY'|'ANY'|'CUSTOM'> $KeyUsages
 * @property list<'TLS_WEB_SERVER_AUTHENTICATION'|'TLS_WEB_CLIENT_AUTHENTICATION'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'IPSEC_END_SYSTEM'|'IPSEC_TUNNEL'|'IPSEC_USER'|'ANY'|'NONE'|'CUSTOM'> $ExtendedKeyUsages
 * @property bool $InUse
 * @property bool $Exported
 * @property 'ELIGIBLE'|'INELIGIBLE' $RenewalEligibility
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $IssuedAt
 * @property \Aws\Api\DateTimeResult $ImportedAt
 * @property \Aws\Api\DateTimeResult $RevokedAt
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     DomainName?: string,
     *     SubjectAlternativeNameSummaries?: list<string>,
     *     HasAdditionalSubjectAlternativeNames?: bool,
     *     Status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED',
     *     Type?: 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE',
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1',
     *     KeyUsages?: list<'DIGITAL_SIGNATURE'|'NON_REPUDIATION'|'KEY_ENCIPHERMENT'|'DATA_ENCIPHERMENT'|'KEY_AGREEMENT'|'CERTIFICATE_SIGNING'|'CRL_SIGNING'|'ENCIPHER_ONLY'|'DECIPHER_ONLY'|'ANY'|'CUSTOM'>,
     *     ExtendedKeyUsages?: list<'TLS_WEB_SERVER_AUTHENTICATION'|'TLS_WEB_CLIENT_AUTHENTICATION'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'IPSEC_END_SYSTEM'|'IPSEC_TUNNEL'|'IPSEC_USER'|'ANY'|'NONE'|'CUSTOM'>,
     *     InUse?: bool,
     *     Exported?: bool,
     *     RenewalEligibility?: 'ELIGIBLE'|'INELIGIBLE',
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     IssuedAt?: \Aws\Api\DateTimeResult,
     *     ImportedAt?: \Aws\Api\DateTimeResult,
     *     RevokedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
