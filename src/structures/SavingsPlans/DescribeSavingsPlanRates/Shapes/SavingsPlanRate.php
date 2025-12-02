<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rate
 * @property 'CNY'|'USD'|'EUR'|null $currency
 * @property 'Hrs'|'Lambda-GB-Second'|'Request'|'ACU-Hr'|'ReadRequestUnits'|'WriteRequestUnits'|'ReadCapacityUnit-Hrs'|'WriteCapacityUnit-Hrs'|'ReplicatedWriteRequestUnits'|'ReplicatedWriteCapacityUnit-Hrs'|'GB-Hours'|'DPU'|'ElastiCacheProcessingUnit'|'DCU-Hr'|'NCU-hr'|null $unit
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'|null $productType
 * @property 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|'AmazonRDS'|'AuroraDSQL'|'AmazonDynamoDB'|'AmazonElastiCache'|'AmazonDocDB'|'AmazonNeptune'|'AmazonTimestream'|'AmazonMCS'|'AWSDatabaseMigrationSvc'|null $serviceCode
 * @property string|null $usageType
 * @property string|null $operation
 * @property list<SavingsPlanRateProperty>|null $properties
 */
class SavingsPlanRate extends Shape
{
    /**
     * @param array{
     *     rate?: string|null,
     *     currency?: 'CNY'|'USD'|'EUR'|null,
     *     unit?: 'Hrs'|'Lambda-GB-Second'|'Request'|'ACU-Hr'|'ReadRequestUnits'|'WriteRequestUnits'|'ReadCapacityUnit-Hrs'|'WriteCapacityUnit-Hrs'|'ReplicatedWriteRequestUnits'|'ReplicatedWriteCapacityUnit-Hrs'|'GB-Hours'|'DPU'|'ElastiCacheProcessingUnit'|'DCU-Hr'|'NCU-hr'|null,
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'|null,
     *     serviceCode?: 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|'AmazonRDS'|'AuroraDSQL'|'AmazonDynamoDB'|'AmazonElastiCache'|'AmazonDocDB'|'AmazonNeptune'|'AmazonTimestream'|'AmazonMCS'|'AWSDatabaseMigrationSvc'|null,
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
