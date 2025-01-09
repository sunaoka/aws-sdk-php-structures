<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSA_2048'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'SM2' $KeyAlgorithm
 * @property 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA'|'SM3WITHSM2' $SigningAlgorithm
 * @property ASN1Subject $Subject
 * @property CsrExtensions $CsrExtensions
 */
class CertificateAuthorityConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyAlgorithm: 'RSA_2048'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'SM2',
     *     SigningAlgorithm: 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA'|'SM3WITHSM2',
     *     Subject: ASN1Subject,
     *     CsrExtensions?: CsrExtensions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
