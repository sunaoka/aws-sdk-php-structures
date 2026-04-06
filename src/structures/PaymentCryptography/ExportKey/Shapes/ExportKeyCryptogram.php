<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $WrappingKeyCertificate
 * @property 'RSA_OAEP_SHA_256'|'RSA_OAEP_SHA_512'|null $WrappingSpec
 */
class ExportKeyCryptogram extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     WrappingKeyCertificate: string,
     *     WrappingSpec?: 'RSA_OAEP_SHA_256'|'RSA_OAEP_SHA_512'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
