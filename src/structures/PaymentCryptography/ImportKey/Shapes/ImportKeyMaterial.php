<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RootCertificatePublicKey|null $RootCertificatePublicKey
 * @property ImportTr31KeyBlock|null $Tr31KeyBlock
 * @property ImportTr34KeyBlock|null $Tr34KeyBlock
 * @property TrustedCertificatePublicKey|null $TrustedCertificatePublicKey
 */
class ImportKeyMaterial extends Shape
{
    /**
     * @param array{
     *     RootCertificatePublicKey?: RootCertificatePublicKey|null,
     *     Tr31KeyBlock?: ImportTr31KeyBlock|null,
     *     Tr34KeyBlock?: ImportTr34KeyBlock|null,
     *     TrustedCertificatePublicKey?: TrustedCertificatePublicKey|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
