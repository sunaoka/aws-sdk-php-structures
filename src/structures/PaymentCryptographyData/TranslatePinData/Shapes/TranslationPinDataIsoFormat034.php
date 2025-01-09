<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryAccountNumber
 */
class TranslationPinDataIsoFormat034 extends Shape
{
    /**
     * @param array{PrimaryAccountNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
