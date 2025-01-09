<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offeringId
 * @property list<'EC2'|'Fargate'|'Lambda'|'SageMaker'> $productTypes
 * @property 'Compute'|'EC2Instance'|'SageMaker' $planType
 * @property string $description
 * @property 'All Upfront'|'Partial Upfront'|'No Upfront' $paymentOption
 * @property int $durationSeconds
 * @property 'CNY'|'USD' $currency
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property list<SavingsPlanOfferingProperty> $properties
 */
class SavingsPlanOffering extends Shape
{
    /**
     * @param array{
     *     offeringId?: string,
     *     productTypes?: list<'EC2'|'Fargate'|'Lambda'|'SageMaker'>,
     *     planType?: 'Compute'|'EC2Instance'|'SageMaker',
     *     description?: string,
     *     paymentOption?: 'All Upfront'|'Partial Upfront'|'No Upfront',
     *     durationSeconds?: int,
     *     currency?: 'CNY'|'USD',
     *     serviceCode?: string,
     *     usageType?: string,
     *     operation?: string,
     *     properties?: list<SavingsPlanOfferingProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
