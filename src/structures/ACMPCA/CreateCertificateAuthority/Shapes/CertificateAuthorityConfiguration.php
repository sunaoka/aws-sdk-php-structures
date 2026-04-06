<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSA_2048'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1' $KeyAlgorithm
 * @property 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA' $SigningAlgorithm
 * @property ASN1Subject $Subject
 * @property CsrExtensions|null $CsrExtensions
 */
class CertificateAuthorityConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyAlgorithm: 'RSA_2048'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1',
     *     SigningAlgorithm: 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA',
     *     Subject: ASN1Subject,
     *     CsrExtensions?: CsrExtensions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
