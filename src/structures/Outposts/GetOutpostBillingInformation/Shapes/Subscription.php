<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostBillingInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubscriptionId
 * @property 'ORIGINAL'|'RENEWAL'|'CAPACITY_INCREASE'|null $SubscriptionType
 * @property 'ACTIVE'|'INACTIVE'|'CANCELLED'|null $SubscriptionStatus
 * @property list<string>|null $OrderIds
 * @property \Aws\Api\DateTimeResult|null $BeginDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property double|null $MonthlyRecurringPrice
 * @property double|null $UpfrontPrice
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionId?: string|null,
     *     SubscriptionType?: 'ORIGINAL'|'RENEWAL'|'CAPACITY_INCREASE'|null,
     *     SubscriptionStatus?: 'ACTIVE'|'INACTIVE'|'CANCELLED'|null,
     *     OrderIds?: list<string>|null,
     *     BeginDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     MonthlyRecurringPrice?: double|null,
     *     UpfrontPrice?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
