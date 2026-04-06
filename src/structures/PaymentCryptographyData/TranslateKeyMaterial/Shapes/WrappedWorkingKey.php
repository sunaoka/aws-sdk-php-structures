<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappedKeyMaterial
 * @property string $KeyCheckValue
 * @property 'KEY_CRYPTOGRAM'|'TR31_KEY_BLOCK'|'TR34_KEY_BLOCK' $WrappedKeyMaterialFormat
 */
class WrappedWorkingKey extends Shape
{
    /**
     * @param array{
     *     WrappedKeyMaterial: string,
     *     KeyCheckValue: string,
     *     WrappedKeyMaterialFormat: 'KEY_CRYPTOGRAM'|'TR31_KEY_BLOCK'|'TR34_KEY_BLOCK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
