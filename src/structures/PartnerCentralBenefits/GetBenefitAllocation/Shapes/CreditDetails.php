<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryValue $AllocatedAmount
 * @property MonetaryValue $IssuedAmount
 * @property list<CreditCode> $Codes
 */
class CreditDetails extends Shape
{
    /**
     * @param array{
     *     AllocatedAmount: MonetaryValue,
     *     IssuedAmount: MonetaryValue,
     *     Codes: list<CreditCode>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
