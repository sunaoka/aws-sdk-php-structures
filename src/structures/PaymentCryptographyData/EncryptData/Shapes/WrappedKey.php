<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WrappedKeyMaterial $WrappedKeyMaterial
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 */
class WrappedKey extends Shape
{
    /**
     * @param array{
     *     WrappedKeyMaterial: WrappedKeyMaterial,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
