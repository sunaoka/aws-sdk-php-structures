<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rate
 * @property 'CNY'|'USD'|null $currency
 * @property 'Hrs'|'Lambda-GB-Second'|'Request'|null $unit
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker'|null $productType
 * @property 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|null $serviceCode
 * @property string|null $usageType
 * @property string|null $operation
 * @property list<SavingsPlanRateProperty>|null $properties
 */
class SavingsPlanRate extends Shape
{
    /**
     * @param array{
     *     rate?: string|null,
     *     currency?: 'CNY'|'USD'|null,
     *     unit?: 'Hrs'|'Lambda-GB-Second'|'Request'|null,
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker'|null,
     *     serviceCode?: 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|null,
     *     usageType?: string|null,
     *     operation?: string|null,
     *     properties?: list<SavingsPlanRateProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
