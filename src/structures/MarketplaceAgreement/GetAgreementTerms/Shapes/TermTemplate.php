<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PaymentScheduleTermTemplate|null $paymentScheduleTermTemplate
 */
class TermTemplate extends Shape
{
    /**
     * @param array{paymentScheduleTermTemplate?: PaymentScheduleTermTemplate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
