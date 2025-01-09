<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TranslationPinDataIsoFormat034 $IsoFormat0
 * @property TranslationPinDataIsoFormat1 $IsoFormat1
 * @property TranslationPinDataIsoFormat034 $IsoFormat3
 * @property TranslationPinDataIsoFormat034 $IsoFormat4
 */
class TranslationIsoFormats extends Shape
{
    /**
     * @param array{
     *     IsoFormat0?: TranslationPinDataIsoFormat034,
     *     IsoFormat1?: TranslationPinDataIsoFormat1,
     *     IsoFormat3?: TranslationPinDataIsoFormat034,
     *     IsoFormat4?: TranslationPinDataIsoFormat034
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
