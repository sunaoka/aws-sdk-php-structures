<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offeringId
 * @property 'All Upfront'|'Partial Upfront'|'No Upfront' $paymentOption
 * @property 'Compute'|'EC2Instance'|'SageMaker' $planType
 * @property int $durationSeconds
 * @property 'CNY'|'USD' $currency
 * @property string $planDescription
 */
class ParentSavingsPlanOffering extends Shape
{
    /**
     * @param array{
     *     offeringId?: string,
     *     paymentOption?: 'All Upfront'|'Partial Upfront'|'No Upfront',
     *     planType?: 'Compute'|'EC2Instance'|'SageMaker',
     *     durationSeconds?: int,
     *     currency?: 'CNY'|'USD',
     *     planDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
