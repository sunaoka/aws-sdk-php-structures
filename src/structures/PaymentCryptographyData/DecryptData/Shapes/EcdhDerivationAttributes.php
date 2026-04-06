<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $PublicKeyCertificate
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224' $KeyAlgorithm
 * @property 'NIST_SP800'|'ANSI_X963' $KeyDerivationFunction
 * @property 'SHA_256'|'SHA_384'|'SHA_512' $KeyDerivationHashAlgorithm
 * @property string $SharedInformation
 */
class EcdhDerivationAttributes extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     PublicKeyCertificate: string,
     *     KeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224',
     *     KeyDerivationFunction: 'NIST_SP800'|'ANSI_X963',
     *     KeyDerivationHashAlgorithm: 'SHA_256'|'SHA_384'|'SHA_512',
     *     SharedInformation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
