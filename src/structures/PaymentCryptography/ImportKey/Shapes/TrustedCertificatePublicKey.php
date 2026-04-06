<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyAttributes $KeyAttributes
 * @property string $PublicKeyCertificate
 * @property string $CertificateAuthorityPublicKeyIdentifier
 */
class TrustedCertificatePublicKey extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: KeyAttributes,
     *     PublicKeyCertificate: string,
     *     CertificateAuthorityPublicKeyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
