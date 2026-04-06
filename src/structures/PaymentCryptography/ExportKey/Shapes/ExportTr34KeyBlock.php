<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $WrappingKeyCertificate
 * @property string $ExportToken
 * @property 'X9_TR34_2012' $KeyBlockFormat
 * @property string|null $RandomNonce
 * @property KeyBlockHeaders|null $KeyBlockHeaders
 */
class ExportTr34KeyBlock extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     WrappingKeyCertificate: string,
     *     ExportToken: string,
     *     KeyBlockFormat: 'X9_TR34_2012',
     *     RandomNonce?: string|null,
     *     KeyBlockHeaders?: KeyBlockHeaders|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
