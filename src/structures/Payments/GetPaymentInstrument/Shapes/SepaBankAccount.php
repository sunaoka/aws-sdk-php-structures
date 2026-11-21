<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountNumberTail
 * @property string|null $accountHolderName
 * @property string|null $bankName
 * @property 'CHECKING'|'SAVINGS'|null $accountType
 */
class SepaBankAccount extends Shape
{
    /**
     * @param array{
     *     accountNumberTail?: string|null,
     *     accountHolderName?: string|null,
     *     bankName?: string|null,
     *     accountType?: 'CHECKING'|'SAVINGS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
