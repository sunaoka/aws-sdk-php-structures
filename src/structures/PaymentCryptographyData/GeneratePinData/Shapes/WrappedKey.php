<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WrappedKeyMaterial $WrappedKeyMaterial
 * @property 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null $KeyCheckValueAlgorithm
 */
class WrappedKey extends Shape
{
    /**
     * @param array{
     *     WrappedKeyMaterial: WrappedKeyMaterial,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
