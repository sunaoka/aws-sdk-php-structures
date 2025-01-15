<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $DomainName
 * @property list<string>|null $SubjectAlternativeNameSummaries
 * @property bool|null $HasAdditionalSubjectAlternativeNames
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null $Status
 * @property 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null $Type
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null $KeyAlgorithm
 * @property list<'DIGITAL_SIGNATURE'|'NON_REPUDIATION'|'KEY_ENCIPHERMENT'|'DATA_ENCIPHERMENT'|'KEY_AGREEMENT'|'CERTIFICATE_SIGNING'|'CRL_SIGNING'|'ENCIPHER_ONLY'|'DECIPHER_ONLY'|'ANY'|'CUSTOM'>|null $KeyUsages
 * @property list<'TLS_WEB_SERVER_AUTHENTICATION'|'TLS_WEB_CLIENT_AUTHENTICATION'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'IPSEC_END_SYSTEM'|'IPSEC_TUNNEL'|'IPSEC_USER'|'ANY'|'NONE'|'CUSTOM'>|null $ExtendedKeyUsages
 * @property bool|null $InUse
 * @property bool|null $Exported
 * @property 'ELIGIBLE'|'INELIGIBLE'|null $RenewalEligibility
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $IssuedAt
 * @property \Aws\Api\DateTimeResult|null $ImportedAt
 * @property \Aws\Api\DateTimeResult|null $RevokedAt
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     DomainName?: string|null,
     *     SubjectAlternativeNameSummaries?: list<string>|null,
     *     HasAdditionalSubjectAlternativeNames?: bool|null,
     *     Status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null,
     *     Type?: 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null,
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null,
     *     KeyUsages?: list<'DIGITAL_SIGNATURE'|'NON_REPUDIATION'|'KEY_ENCIPHERMENT'|'DATA_ENCIPHERMENT'|'KEY_AGREEMENT'|'CERTIFICATE_SIGNING'|'CRL_SIGNING'|'ENCIPHER_ONLY'|'DECIPHER_ONLY'|'ANY'|'CUSTOM'>|null,
     *     ExtendedKeyUsages?: list<'TLS_WEB_SERVER_AUTHENTICATION'|'TLS_WEB_CLIENT_AUTHENTICATION'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'IPSEC_END_SYSTEM'|'IPSEC_TUNNEL'|'IPSEC_USER'|'ANY'|'NONE'|'CUSTOM'>|null,
     *     InUse?: bool|null,
     *     Exported?: bool|null,
     *     RenewalEligibility?: 'ELIGIBLE'|'INELIGIBLE'|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     IssuedAt?: \Aws\Api\DateTimeResult|null,
     *     ImportedAt?: \Aws\Api\DateTimeResult|null,
     *     RevokedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
