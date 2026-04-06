<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParentSavingsPlanOffering|null $savingsPlanOffering
 * @property string|null $rate
 * @property 'Hrs'|'Lambda-GB-Second'|'Request'|null $unit
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker'|null $productType
 * @property 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|null $serviceCode
 * @property string|null $usageType
 * @property string|null $operation
 * @property list<SavingsPlanOfferingRateProperty>|null $properties
 */
class SavingsPlanOfferingRate extends Shape
{
    /**
     * @param array{
     *     savingsPlanOffering?: ParentSavingsPlanOffering|null,
     *     rate?: string|null,
     *     unit?: 'Hrs'|'Lambda-GB-Second'|'Request'|null,
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker'|null,
     *     serviceCode?: 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|null,
     *     usageType?: string|null,
     *     operation?: string|null,
     *     properties?: list<SavingsPlanOfferingRateProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
