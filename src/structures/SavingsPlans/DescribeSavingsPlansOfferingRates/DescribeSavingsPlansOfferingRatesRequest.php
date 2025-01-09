<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $savingsPlanOfferingIds
 * @property list<'All Upfront'|'Partial Upfront'|'No Upfront'> $savingsPlanPaymentOptions
 * @property list<'Compute'|'EC2Instance'|'SageMaker'> $savingsPlanTypes
 * @property list<'EC2'|'Fargate'|'Lambda'|'SageMaker'> $products
 * @property list<'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'> $serviceCodes
 * @property list<string> $usageTypes
 * @property list<string> $operations
 * @property list<Shapes\SavingsPlanOfferingRateFilterElement> $filters
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class DescribeSavingsPlansOfferingRatesRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanOfferingIds?: list<string>,
     *     savingsPlanPaymentOptions?: list<'All Upfront'|'Partial Upfront'|'No Upfront'>,
     *     savingsPlanTypes?: list<'Compute'|'EC2Instance'|'SageMaker'>,
     *     products?: list<'EC2'|'Fargate'|'Lambda'|'SageMaker'>,
     *     serviceCodes?: list<'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'>,
     *     usageTypes?: list<string>,
     *     operations?: list<string>,
     *     filters?: list<Shapes\SavingsPlanOfferingRateFilterElement>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
