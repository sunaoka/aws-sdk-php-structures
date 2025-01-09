<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $offeringIds
 * @property list<'All Upfront'|'Partial Upfront'|'No Upfront'> $paymentOptions
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker' $productType
 * @property list<'Compute'|'EC2Instance'|'SageMaker'> $planTypes
 * @property list<int> $durations
 * @property list<'CNY'|'USD'> $currencies
 * @property list<string> $descriptions
 * @property list<string> $serviceCodes
 * @property list<string> $usageTypes
 * @property list<string> $operations
 * @property list<Shapes\SavingsPlanOfferingFilterElement> $filters
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeSavingsPlansOfferingsRequest extends Request
{
    /**
     * @param array{
     *     offeringIds?: list<string>,
     *     paymentOptions?: list<'All Upfront'|'Partial Upfront'|'No Upfront'>,
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker',
     *     planTypes?: list<'Compute'|'EC2Instance'|'SageMaker'>,
     *     durations?: list<int>,
     *     currencies?: list<'CNY'|'USD'>,
     *     descriptions?: list<string>,
     *     serviceCodes?: list<string>,
     *     usageTypes?: list<string>,
     *     operations?: list<string>,
     *     filters?: list<Shapes\SavingsPlanOfferingFilterElement>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
