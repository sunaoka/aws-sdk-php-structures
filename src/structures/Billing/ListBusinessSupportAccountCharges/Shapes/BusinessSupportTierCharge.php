<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tierDescription
 * @property string $tierRate
 * @property string $usageSlice
 * @property string $tierCharge
 * @property \Aws\Api\DateTimeResult|null $chargePeriodStartDate
 * @property \Aws\Api\DateTimeResult|null $chargePeriodEndDate
 */
class BusinessSupportTierCharge extends Shape
{
    /**
     * @param array{
     *     tierDescription: string,
     *     tierRate: string,
     *     usageSlice: string,
     *     tierCharge: string,
     *     chargePeriodStartDate?: \Aws\Api\DateTimeResult|null,
     *     chargePeriodEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
