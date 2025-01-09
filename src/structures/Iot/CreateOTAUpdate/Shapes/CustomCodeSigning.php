<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeSigningSignature $signature
 * @property CodeSigningCertificateChain $certificateChain
 * @property string $hashAlgorithm
 * @property string $signatureAlgorithm
 */
class CustomCodeSigning extends Shape
{
    /**
     * @param array{
     *     signature?: CodeSigningSignature,
     *     certificateChain?: CodeSigningCertificateChain,
     *     hashAlgorithm?: string,
     *     signatureAlgorithm?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
