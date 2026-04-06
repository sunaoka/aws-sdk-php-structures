<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DistinguishedName|null $Issuer
 * @property DistinguishedName|null $Subject
 * @property list<GeneralName>|null $SubjectAlternativeNames
 * @property list<'TLS_WEB_SERVER_AUTHENTICATION'|'TLS_WEB_CLIENT_AUTHENTICATION'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'IPSEC_END_SYSTEM'|'IPSEC_TUNNEL'|'IPSEC_USER'|'ANY'|'NONE'|'CUSTOM'>|null $ExtendedKeyUsages
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null $KeyAlgorithm
 * @property list<'DIGITAL_SIGNATURE'|'NON_REPUDIATION'|'KEY_ENCIPHERMENT'|'DATA_ENCIPHERMENT'|'KEY_AGREEMENT'|'CERTIFICATE_SIGNING'|'CRL_SIGNING'|'ENCIPHER_ONLY'|'DECIPHER_ONLY'|'ANY'|'CUSTOM'>|null $KeyUsages
 * @property string|null $SerialNumber
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 */
class X509Attributes extends Shape
{
    /**
     * @param array{
     *     Issuer?: DistinguishedName|null,
     *     Subject?: DistinguishedName|null,
     *     SubjectAlternativeNames?: list<GeneralName>|null,
     *     ExtendedKeyUsages?: list<'TLS_WEB_SERVER_AUTHENTICATION'|'TLS_WEB_CLIENT_AUTHENTICATION'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'IPSEC_END_SYSTEM'|'IPSEC_TUNNEL'|'IPSEC_USER'|'ANY'|'NONE'|'CUSTOM'>|null,
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null,
     *     KeyUsages?: list<'DIGITAL_SIGNATURE'|'NON_REPUDIATION'|'KEY_ENCIPHERMENT'|'DATA_ENCIPHERMENT'|'KEY_AGREEMENT'|'CERTIFICATE_SIGNING'|'CRL_SIGNING'|'ENCIPHER_ONLY'|'DECIPHER_ONLY'|'ANY'|'CUSTOM'>|null,
     *     SerialNumber?: string|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
