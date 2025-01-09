<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParentSavingsPlanOffering $savingsPlanOffering
 * @property string $rate
 * @property 'Hrs'|'Lambda-GB-Second'|'Request' $unit
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker' $productType
 * @property 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker' $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property list<SavingsPlanOfferingRateProperty> $properties
 */
class SavingsPlanOfferingRate extends Shape
{
    /**
     * @param array{
     *     savingsPlanOffering?: ParentSavingsPlanOffering,
     *     rate?: string,
     *     unit?: 'Hrs'|'Lambda-GB-Second'|'Request',
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker',
     *     serviceCode?: 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker',
     *     usageType?: string,
     *     operation?: string,
     *     properties?: list<SavingsPlanOfferingRateProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
