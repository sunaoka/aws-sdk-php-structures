<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParentSavingsPlanOffering|null $savingsPlanOffering
 * @property string|null $rate
 * @property 'Hrs'|'Lambda-GB-Second'|'Request'|'ACU-Hr'|'ReadRequestUnits'|'WriteRequestUnits'|'ReadCapacityUnit-Hrs'|'WriteCapacityUnit-Hrs'|'ReplicatedWriteRequestUnits'|'ReplicatedWriteCapacityUnit-Hrs'|'GB-Hours'|'DPU'|'ElastiCacheProcessingUnit'|'DCU-Hr'|'NCU-hr'|null $unit
 * @property 'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'|null $productType
 * @property 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|'AmazonRDS'|'AuroraDSQL'|'AmazonDynamoDB'|'AmazonElastiCache'|'AmazonDocDB'|'AmazonNeptune'|'AmazonTimestream'|'AmazonMCS'|'AWSDatabaseMigrationSvc'|null $serviceCode
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
     *     unit?: 'Hrs'|'Lambda-GB-Second'|'Request'|'ACU-Hr'|'ReadRequestUnits'|'WriteRequestUnits'|'ReadCapacityUnit-Hrs'|'WriteCapacityUnit-Hrs'|'ReplicatedWriteRequestUnits'|'ReplicatedWriteCapacityUnit-Hrs'|'GB-Hours'|'DPU'|'ElastiCacheProcessingUnit'|'DCU-Hr'|'NCU-hr'|null,
     *     productType?: 'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'|null,
     *     serviceCode?: 'AmazonEC2'|'AmazonECS'|'AmazonEKS'|'AWSLambda'|'AmazonSageMaker'|'AmazonRDS'|'AuroraDSQL'|'AmazonDynamoDB'|'AmazonElastiCache'|'AmazonDocDB'|'AmazonNeptune'|'AmazonTimestream'|'AmazonMCS'|'AWSDatabaseMigrationSvc'|null,
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
