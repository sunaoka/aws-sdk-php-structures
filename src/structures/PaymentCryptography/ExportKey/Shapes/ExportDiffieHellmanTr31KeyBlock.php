<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateKeyIdentifier
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $PublicKeyCertificate
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256' $DeriveKeyAlgorithm
 * @property 'NIST_SP800'|'ANSI_X963' $KeyDerivationFunction
 * @property 'SHA_256'|'SHA_384'|'SHA_512' $KeyDerivationHashAlgorithm
 * @property DiffieHellmanDerivationData $DerivationData
 * @property KeyBlockHeaders|null $KeyBlockHeaders
 */
class ExportDiffieHellmanTr31KeyBlock extends Shape
{
    /**
     * @param array{
     *     PrivateKeyIdentifier: string,
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     PublicKeyCertificate: string,
     *     DeriveKeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256',
     *     KeyDerivationFunction: 'NIST_SP800'|'ANSI_X963',
     *     KeyDerivationHashAlgorithm: 'SHA_256'|'SHA_384'|'SHA_512',
     *     DerivationData: DiffieHellmanDerivationData,
     *     KeyBlockHeaders?: KeyBlockHeaders|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
