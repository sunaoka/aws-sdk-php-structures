<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Card|null $card
 * @property UsAchBankAccount|null $usAchBankAccount
 * @property SepaBankAccount|null $sepaBankAccount
 * @property UkBacsBankAccount|null $ukBacsBankAccount
 * @property InNetBanking|null $inNetBanking
 * @property CnBankRedirect|null $cnBankRedirect
 * @property Upi|null $upi
 */
class PaymentInstrumentDetails extends Shape
{
    /**
     * @param array{
     *     card?: Card|null,
     *     usAchBankAccount?: UsAchBankAccount|null,
     *     sepaBankAccount?: SepaBankAccount|null,
     *     ukBacsBankAccount?: UkBacsBankAccount|null,
     *     inNetBanking?: InNetBanking|null,
     *     cnBankRedirect?: CnBankRedirect|null,
     *     upi?: Upi|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
