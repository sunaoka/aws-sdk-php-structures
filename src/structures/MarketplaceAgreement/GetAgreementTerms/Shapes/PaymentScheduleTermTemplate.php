<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PaymentScheduleEntry>|null $schedule
 */
class PaymentScheduleTermTemplate extends Shape
{
    /**
     * @param array{schedule?: list<PaymentScheduleEntry>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
