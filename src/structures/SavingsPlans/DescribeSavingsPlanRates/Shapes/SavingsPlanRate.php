<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rate
 * @property 'CNY'|'USD' $currency
 * @property 'Hrs'|'Lambda-GB-Second'|'Request' $unit
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker' $productType
 * @property 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker' $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property list<SavingsPlanRateProperty> $properties
 */
class SavingsPlanRate extends Shape
{
    /**
     * @param array{
     *     rate?: string,
     *     currency?: 'CNY'|'USD',
     *     unit?: 'Hrs'|'Lambda-GB-Second'|'Request',
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker',
     *     serviceCode?: 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker',
     *     usageType?: string,
     *     operation?: string,
     *     properties?: list<SavingsPlanRateProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
