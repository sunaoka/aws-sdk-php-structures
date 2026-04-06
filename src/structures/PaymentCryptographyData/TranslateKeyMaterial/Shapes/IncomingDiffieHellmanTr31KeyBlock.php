<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateKeyIdentifier
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $PublicKeyCertificate
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224' $DeriveKeyAlgorithm
 * @property 'NIST_SP800'|'ANSI_X963' $KeyDerivationFunction
 * @property 'SHA_256'|'SHA_384'|'SHA_512' $KeyDerivationHashAlgorithm
 * @property DiffieHellmanDerivationData $DerivationData
 * @property string $WrappedKeyBlock
 */
class IncomingDiffieHellmanTr31KeyBlock extends Shape
{
    /**
     * @param array{
     *     PrivateKeyIdentifier: string,
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     PublicKeyCertificate: string,
     *     DeriveKeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224',
     *     KeyDerivationFunction: 'NIST_SP800'|'ANSI_X963',
     *     KeyDerivationHashAlgorithm: 'SHA_256'|'SHA_384'|'SHA_512',
     *     DerivationData: DiffieHellmanDerivationData,
     *     WrappedKeyBlock: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
