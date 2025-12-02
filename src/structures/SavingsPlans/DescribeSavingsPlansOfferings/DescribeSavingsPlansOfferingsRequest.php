<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $offeringIds
 * @property list<'All Upfront'|'Partial Upfront'|'No Upfront'>|null $paymentOptions
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'|null $productType
 * @property list<'Compute'|'EC2Instance'|'SageMaker'|'Database'>|null $planTypes
 * @property list<int<0, max>>|null $durations
 * @property list<'CNY'|'USD'|'EUR'>|null $currencies
 * @property list<string>|null $descriptions
 * @property list<string>|null $serviceCodes
 * @property list<string>|null $usageTypes
 * @property list<string>|null $operations
 * @property list<Shapes\SavingsPlanOfferingFilterElement>|null $filters
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class DescribeSavingsPlansOfferingsRequest extends Request
{
    /**
     * @param array{
     *     offeringIds?: list<string>|null,
     *     paymentOptions?: list<'All Upfront'|'Partial Upfront'|'No Upfront'>|null,
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'|null,
     *     planTypes?: list<'Compute'|'EC2Instance'|'SageMaker'|'Database'>|null,
     *     durations?: list<int<0, max>>|null,
     *     currencies?: list<'CNY'|'USD'|'EUR'>|null,
     *     descriptions?: list<string>|null,
     *     serviceCodes?: list<string>|null,
     *     usageTypes?: list<string>|null,
     *     operations?: list<string>|null,
     *     filters?: list<Shapes\SavingsPlanOfferingFilterElement>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
