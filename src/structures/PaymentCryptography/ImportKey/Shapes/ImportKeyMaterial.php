<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RootCertificatePublicKey|null $RootCertificatePublicKey
 * @property TrustedCertificatePublicKey|null $TrustedCertificatePublicKey
 * @property ImportTr31KeyBlock|null $Tr31KeyBlock
 * @property ImportTr34KeyBlock|null $Tr34KeyBlock
 * @property ImportKeyCryptogram|null $KeyCryptogram
 */
class ImportKeyMaterial extends Shape
{
    /**
     * @param array{
     *     RootCertificatePublicKey?: RootCertificatePublicKey|null,
     *     TrustedCertificatePublicKey?: TrustedCertificatePublicKey|null,
     *     Tr31KeyBlock?: ImportTr31KeyBlock|null,
     *     Tr34KeyBlock?: ImportTr34KeyBlock|null,
     *     KeyCryptogram?: ImportKeyCryptogram|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
