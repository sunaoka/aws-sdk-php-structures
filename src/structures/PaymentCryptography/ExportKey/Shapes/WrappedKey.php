<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappingKeyArn
 * @property 'KEY_CRYPTOGRAM'|'TR31_KEY_BLOCK'|'TR34_KEY_BLOCK' $WrappedKeyMaterialFormat
 * @property string $KeyMaterial
 * @property string $KeyCheckValue
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 */
class WrappedKey extends Shape
{
    /**
     * @param array{
     *     WrappingKeyArn: string,
     *     WrappedKeyMaterialFormat: 'KEY_CRYPTOGRAM'|'TR31_KEY_BLOCK'|'TR34_KEY_BLOCK',
     *     KeyMaterial: string,
     *     KeyCheckValue?: string,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
