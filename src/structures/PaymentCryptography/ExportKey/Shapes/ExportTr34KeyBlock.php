<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $ExportToken
 * @property 'X9_TR34_2012' $KeyBlockFormat
 * @property string|null $RandomNonce
 * @property string $WrappingKeyCertificate
 */
class ExportTr34KeyBlock extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     ExportToken: string,
     *     KeyBlockFormat: 'X9_TR34_2012',
     *     RandomNonce?: string|null,
     *     WrappingKeyCertificate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
