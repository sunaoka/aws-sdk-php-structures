<?php

namespace Sunaoka\Aws\Structures\S3Tables;

class S3TablesClient extends \Aws\S3Tables\S3TablesClient
{
    use CreateNamespace\CreateNamespaceTrait;
    use CreateTable\CreateTableTrait;
    use CreateTableBucket\CreateTableBucketTrait;
    use DeleteNamespace\DeleteNamespaceTrait;
    use DeleteTable\DeleteTableTrait;
    use DeleteTableBucket\DeleteTableBucketTrait;
    use DeleteTableBucketEncryption\DeleteTableBucketEncryptionTrait;
    use DeleteTableBucketMetricsConfiguration\DeleteTableBucketMetricsConfigurationTrait;
    use DeleteTableBucketPolicy\DeleteTableBucketPolicyTrait;
    use DeleteTablePolicy\DeleteTablePolicyTrait;
    use GetNamespace\GetNamespaceTrait;
    use GetTable\GetTableTrait;
    use GetTableBucket\GetTableBucketTrait;
    use GetTableBucketEncryption\GetTableBucketEncryptionTrait;
    use GetTableBucketMaintenanceConfiguration\GetTableBucketMaintenanceConfigurationTrait;
    use GetTableBucketMetricsConfiguration\GetTableBucketMetricsConfigurationTrait;
    use GetTableBucketPolicy\GetTableBucketPolicyTrait;
    use GetTableEncryption\GetTableEncryptionTrait;
    use GetTableMaintenanceConfiguration\GetTableMaintenanceConfigurationTrait;
    use GetTableMaintenanceJobStatus\GetTableMaintenanceJobStatusTrait;
    use GetTableMetadataLocation\GetTableMetadataLocationTrait;
    use GetTablePolicy\GetTablePolicyTrait;
    use ListNamespaces\ListNamespacesTrait;
    use ListTableBuckets\ListTableBucketsTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutTableBucketEncryption\PutTableBucketEncryptionTrait;
    use PutTableBucketMaintenanceConfiguration\PutTableBucketMaintenanceConfigurationTrait;
    use PutTableBucketMetricsConfiguration\PutTableBucketMetricsConfigurationTrait;
    use PutTableBucketPolicy\PutTableBucketPolicyTrait;
    use PutTableMaintenanceConfiguration\PutTableMaintenanceConfigurationTrait;
    use PutTablePolicy\PutTablePolicyTrait;
    use RenameTable\RenameTableTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateTableMetadataLocation\UpdateTableMetadataLocationTrait;
}
