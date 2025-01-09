<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RootCertificatePublicKey $RootCertificatePublicKey
 * @property TrustedCertificatePublicKey $TrustedCertificatePublicKey
 * @property ImportTr31KeyBlock $Tr31KeyBlock
 * @property ImportTr34KeyBlock $Tr34KeyBlock
 * @property ImportKeyCryptogram $KeyCryptogram
 */
class ImportKeyMaterial extends Shape
{
    /**
     * @param array{
     *     RootCertificatePublicKey?: RootCertificatePublicKey,
     *     TrustedCertificatePublicKey?: TrustedCertificatePublicKey,
     *     Tr31KeyBlock?: ImportTr31KeyBlock,
     *     Tr34KeyBlock?: ImportTr34KeyBlock,
     *     KeyCryptogram?: ImportKeyCryptogram
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
