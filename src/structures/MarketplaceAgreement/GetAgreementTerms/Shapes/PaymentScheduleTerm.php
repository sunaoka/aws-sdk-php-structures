<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $currencyCode
 * @property list<ScheduleItem> $schedule
 * @property string $type
 */
class PaymentScheduleTerm extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string,
     *     schedule?: list<ScheduleItem>,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
