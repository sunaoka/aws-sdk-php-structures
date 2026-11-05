<?php

namespace Sunaoka\Aws\Structures\S3Tables;

class S3TablesClient extends \Aws\S3Tables\S3TablesClient
{
    use CompleteTableMigration\CompleteTableMigrationTrait;
    use CreateNamespace\CreateNamespaceTrait;
    use CreateTable\CreateTableTrait;
    use CreateTableBucket\CreateTableBucketTrait;
    use DeleteNamespace\DeleteNamespaceTrait;
    use DeleteTable\DeleteTableTrait;
    use DeleteTableBucket\DeleteTableBucketTrait;
    use DeleteTableBucketEncryption\DeleteTableBucketEncryptionTrait;
    use DeleteTableBucketMetricsConfiguration\DeleteTableBucketMetricsConfigurationTrait;
    use DeleteTableBucketPolicy\DeleteTableBucketPolicyTrait;
    use DeleteTableBucketReplication\DeleteTableBucketReplicationTrait;
    use DeleteTablePolicy\DeleteTablePolicyTrait;
    use DeleteTableReplication\DeleteTableReplicationTrait;
    use GetNamespace\GetNamespaceTrait;
    use GetTable\GetTableTrait;
    use GetTableBucket\GetTableBucketTrait;
    use GetTableBucketEncryption\GetTableBucketEncryptionTrait;
    use GetTableBucketMaintenanceConfiguration\GetTableBucketMaintenanceConfigurationTrait;
    use GetTableBucketMetricsConfiguration\GetTableBucketMetricsConfigurationTrait;
    use GetTableBucketPolicy\GetTableBucketPolicyTrait;
    use GetTableBucketReplication\GetTableBucketReplicationTrait;
    use GetTableBucketStorageClass\GetTableBucketStorageClassTrait;
    use GetTableEncryption\GetTableEncryptionTrait;
    use GetTableMaintenanceConfiguration\GetTableMaintenanceConfigurationTrait;
    use GetTableMaintenanceJobStatus\GetTableMaintenanceJobStatusTrait;
    use GetTableMetadataLocation\GetTableMetadataLocationTrait;
    use GetTableMigration\GetTableMigrationTrait;
    use GetTablePolicy\GetTablePolicyTrait;
    use GetTableRecordExpirationConfiguration\GetTableRecordExpirationConfigurationTrait;
    use GetTableRecordExpirationJobStatus\GetTableRecordExpirationJobStatusTrait;
    use GetTableReplication\GetTableReplicationTrait;
    use GetTableReplicationStatus\GetTableReplicationStatusTrait;
    use GetTableStorageClass\GetTableStorageClassTrait;
    use ListNamespaces\ListNamespacesTrait;
    use ListTableBuckets\ListTableBucketsTrait;
    use ListTableMigrations\ListTableMigrationsTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutTableBucketEncryption\PutTableBucketEncryptionTrait;
    use PutTableBucketMaintenanceConfiguration\PutTableBucketMaintenanceConfigurationTrait;
    use PutTableBucketMetricsConfiguration\PutTableBucketMetricsConfigurationTrait;
    use PutTableBucketPolicy\PutTableBucketPolicyTrait;
    use PutTableBucketReplication\PutTableBucketReplicationTrait;
    use PutTableBucketStorageClass\PutTableBucketStorageClassTrait;
    use PutTableMaintenanceConfiguration\PutTableMaintenanceConfigurationTrait;
    use PutTablePolicy\PutTablePolicyTrait;
    use PutTableRecordExpirationConfiguration\PutTableRecordExpirationConfigurationTrait;
    use PutTableReplication\PutTableReplicationTrait;
    use RenameTable\RenameTableTrait;
    use StartTableMigration\StartTableMigrationTrait;
    use SyncTableMigration\SyncTableMigrationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateTableMetadataLocation\UpdateTableMetadataLocationTrait;
    use UpdateTableMigration\UpdateTableMigrationTrait;
}
