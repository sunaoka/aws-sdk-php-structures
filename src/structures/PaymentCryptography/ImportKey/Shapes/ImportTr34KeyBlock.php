<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $ImportToken
 * @property 'X9_TR34_2012' $KeyBlockFormat
 * @property string|null $RandomNonce
 * @property string $SigningKeyCertificate
 * @property string $WrappedKeyBlock
 */
class ImportTr34KeyBlock extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     ImportToken: string,
     *     KeyBlockFormat: 'X9_TR34_2012',
     *     RandomNonce?: string|null,
     *     SigningKeyCertificate: string,
     *     WrappedKeyBlock: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
