<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RootCertificatePublicKey|null $RootCertificatePublicKey
 * @property TrustedCertificatePublicKey|null $TrustedCertificatePublicKey
 * @property ImportTr31KeyBlock|null $Tr31KeyBlock
 * @property ImportTr34KeyBlock|null $Tr34KeyBlock
 * @property ImportKeyCryptogram|null $KeyCryptogram
 * @property ImportDiffieHellmanTr31KeyBlock|null $DiffieHellmanTr31KeyBlock
 * @property ImportAs2805KeyCryptogram|null $As2805KeyCryptogram
 */
class ImportKeyMaterial extends Shape
{
    /**
     * @param array{
     *     RootCertificatePublicKey?: RootCertificatePublicKey|null,
     *     TrustedCertificatePublicKey?: TrustedCertificatePublicKey|null,
     *     Tr31KeyBlock?: ImportTr31KeyBlock|null,
     *     Tr34KeyBlock?: ImportTr34KeyBlock|null,
     *     KeyCryptogram?: ImportKeyCryptogram|null,
     *     DiffieHellmanTr31KeyBlock?: ImportDiffieHellmanTr31KeyBlock|null,
     *     As2805KeyCryptogram?: ImportAs2805KeyCryptogram|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
