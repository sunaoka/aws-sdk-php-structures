<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeSigningSignature|null $signature
 * @property CodeSigningCertificateChain|null $certificateChain
 * @property string|null $hashAlgorithm
 * @property string|null $signatureAlgorithm
 */
class CustomCodeSigning extends Shape
{
    /**
     * @param array{
     *     signature?: CodeSigningSignature|null,
     *     certificateChain?: CodeSigningCertificateChain|null,
     *     hashAlgorithm?: string|null,
     *     signatureAlgorithm?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
