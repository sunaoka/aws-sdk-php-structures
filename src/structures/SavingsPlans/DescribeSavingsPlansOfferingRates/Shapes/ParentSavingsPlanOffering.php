<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $offeringId
 * @property 'All Upfront'|'Partial Upfront'|'No Upfront'|null $paymentOption
 * @property 'Compute'|'EC2Instance'|'SageMaker'|null $planType
 * @property int<0, max>|null $durationSeconds
 * @property 'CNY'|'USD'|null $currency
 * @property string|null $planDescription
 */
class ParentSavingsPlanOffering extends Shape
{
    /**
     * @param array{
     *     offeringId?: string|null,
     *     paymentOption?: 'All Upfront'|'Partial Upfront'|'No Upfront'|null,
     *     planType?: 'Compute'|'EC2Instance'|'SageMaker'|null,
     *     durationSeconds?: int<0, max>|null,
     *     currency?: 'CNY'|'USD'|null,
     *     planDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
