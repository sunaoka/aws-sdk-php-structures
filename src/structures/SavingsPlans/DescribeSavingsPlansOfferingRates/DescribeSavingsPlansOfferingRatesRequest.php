<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $savingsPlanOfferingIds
 * @property list<'All Upfront'|'Partial Upfront'|'No Upfront'>|null $savingsPlanPaymentOptions
 * @property list<'Compute'|'EC2Instance'|'SageMaker'|'Database'>|null $savingsPlanTypes
 * @property list<'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'>|null $products
 * @property list<'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|'AmazonRDS'|'AuroraDSQL'|'AmazonDynamoDB'|'AmazonElastiCache'|'AmazonDocDB'|'AmazonNeptune'|'AmazonTimestream'|'AmazonMCS'|'AWSDatabaseMigrationSvc'>|null $serviceCodes
 * @property list<string>|null $usageTypes
 * @property list<string>|null $operations
 * @property list<Shapes\SavingsPlanOfferingRateFilterElement>|null $filters
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class DescribeSavingsPlansOfferingRatesRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanOfferingIds?: list<string>|null,
     *     savingsPlanPaymentOptions?: list<'All Upfront'|'Partial Upfront'|'No Upfront'>|null,
     *     savingsPlanTypes?: list<'Compute'|'EC2Instance'|'SageMaker'|'Database'>|null,
     *     products?: list<'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'>|null,
     *     serviceCodes?: list<'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|'AmazonRDS'|'AuroraDSQL'|'AmazonDynamoDB'|'AmazonElastiCache'|'AmazonDocDB'|'AmazonNeptune'|'AmazonTimestream'|'AmazonMCS'|'AWSDatabaseMigrationSvc'>|null,
     *     usageTypes?: list<string>|null,
     *     operations?: list<string>|null,
     *     filters?: list<Shapes\SavingsPlanOfferingRateFilterElement>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
