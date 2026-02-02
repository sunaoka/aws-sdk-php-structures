<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryAccountNumber
 */
class TranslationPinDataAs2805Format0 extends Shape
{
    /**
     * @param array{PrimaryAccountNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
