<?php

namespace Sunaoka\Aws\Structures\DynamoDb;

class DynamoDbClient extends \Aws\DynamoDb\DynamoDbClient
{
    use BatchExecuteStatement\BatchExecuteStatementTrait;
    use BatchGetItem\BatchGetItemTrait;
    use BatchWriteItem\BatchWriteItemTrait;
    use CreateBackup\CreateBackupTrait;
    use CreateGlobalTable\CreateGlobalTableTrait;
    use CreateTable\CreateTableTrait;
    use DeleteBackup\DeleteBackupTrait;
    use DeleteItem\DeleteItemTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteTable\DeleteTableTrait;
    use DescribeBackup\DescribeBackupTrait;
    use DescribeContinuousBackups\DescribeContinuousBackupsTrait;
    use DescribeContributorInsights\DescribeContributorInsightsTrait;
    use DescribeEndpoints\DescribeEndpointsTrait;
    use DescribeExport\DescribeExportTrait;
    use DescribeGlobalTable\DescribeGlobalTableTrait;
    use DescribeGlobalTableSettings\DescribeGlobalTableSettingsTrait;
    use DescribeImport\DescribeImportTrait;
    use DescribeKinesisStreamingDestination\DescribeKinesisStreamingDestinationTrait;
    use DescribeLimits\DescribeLimitsTrait;
    use DescribeTable\DescribeTableTrait;
    use DescribeTableReplicaAutoScaling\DescribeTableReplicaAutoScalingTrait;
    use DescribeTimeToLive\DescribeTimeToLiveTrait;
    use DisableKinesisStreamingDestination\DisableKinesisStreamingDestinationTrait;
    use EnableKinesisStreamingDestination\EnableKinesisStreamingDestinationTrait;
    use ExecuteStatement\ExecuteStatementTrait;
    use ExecuteTransaction\ExecuteTransactionTrait;
    use ExportTableToPointInTime\ExportTableToPointInTimeTrait;
    use GetItem\GetItemTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ImportTable\ImportTableTrait;
    use ListBackups\ListBackupsTrait;
    use ListContributorInsights\ListContributorInsightsTrait;
    use ListExports\ListExportsTrait;
    use ListGlobalTables\ListGlobalTablesTrait;
    use ListImports\ListImportsTrait;
    use ListTables\ListTablesTrait;
    use ListTagsOfResource\ListTagsOfResourceTrait;
    use PutItem\PutItemTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use Query\QueryTrait;
    use RestoreTableFromBackup\RestoreTableFromBackupTrait;
    use RestoreTableToPointInTime\RestoreTableToPointInTimeTrait;
    use Scan\ScanTrait;
    use TagResource\TagResourceTrait;
    use TransactGetItems\TransactGetItemsTrait;
    use TransactWriteItems\TransactWriteItemsTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateContinuousBackups\UpdateContinuousBackupsTrait;
    use UpdateContributorInsights\UpdateContributorInsightsTrait;
    use UpdateGlobalTable\UpdateGlobalTableTrait;
    use UpdateGlobalTableSettings\UpdateGlobalTableSettingsTrait;
    use UpdateItem\UpdateItemTrait;
    use UpdateKinesisStreamingDestination\UpdateKinesisStreamingDestinationTrait;
    use UpdateTable\UpdateTableTrait;
    use UpdateTableReplicaAutoScaling\UpdateTableReplicaAutoScalingTrait;
    use UpdateTimeToLive\UpdateTimeToLiveTrait;
}
