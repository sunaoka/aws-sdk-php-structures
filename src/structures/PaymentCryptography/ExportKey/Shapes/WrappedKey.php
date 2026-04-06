<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyMaterial
 * @property 'KEY_CRYPTOGRAM'|'TR31_KEY_BLOCK'|'TR34_KEY_BLOCK' $WrappedKeyMaterialFormat
 * @property string $WrappingKeyArn
 */
class WrappedKey extends Shape
{
    /**
     * @param array{
     *     KeyMaterial: string,
     *     WrappedKeyMaterialFormat: 'KEY_CRYPTOGRAM'|'TR31_KEY_BLOCK'|'TR34_KEY_BLOCK',
     *     WrappingKeyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
