<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currencyCode
 * @property list<ScheduleItem>|null $schedule
 * @property string|null $type
 */
class PaymentScheduleTerm extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string|null,
     *     schedule?: list<ScheduleItem>|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
