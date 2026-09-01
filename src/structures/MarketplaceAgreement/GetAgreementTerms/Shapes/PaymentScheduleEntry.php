<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $chargeDateOffset
 * @property string|null $chargePercentage
 * @property int<1, 31>|null $dayOfMonth
 */
class PaymentScheduleEntry extends Shape
{
    /**
     * @param array{
     *     chargeDateOffset?: string|null,
     *     chargePercentage?: string|null,
     *     dayOfMonth?: int<1, 31>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
