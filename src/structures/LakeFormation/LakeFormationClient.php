<?php

namespace Sunaoka\Aws\Structures\LakeFormation;

class LakeFormationClient extends \Aws\LakeFormation\LakeFormationClient
{
    use AddLFTagsToResource\AddLFTagsToResourceTrait;
    use AssumeDecoratedRoleWithSAML\AssumeDecoratedRoleWithSAMLTrait;
    use BatchGrantPermissions\BatchGrantPermissionsTrait;
    use BatchRevokePermissions\BatchRevokePermissionsTrait;
    use CancelTransaction\CancelTransactionTrait;
    use CommitTransaction\CommitTransactionTrait;
    use CreateDataCellsFilter\CreateDataCellsFilterTrait;
    use CreateLFTag\CreateLFTagTrait;
    use DeleteDataCellsFilter\DeleteDataCellsFilterTrait;
    use DeleteLFTag\DeleteLFTagTrait;
    use DeleteObjectsOnCancel\DeleteObjectsOnCancelTrait;
    use DeregisterResource\DeregisterResourceTrait;
    use DescribeResource\DescribeResourceTrait;
    use DescribeTransaction\DescribeTransactionTrait;
    use ExtendTransaction\ExtendTransactionTrait;
    use GetDataCellsFilter\GetDataCellsFilterTrait;
    use GetDataLakeSettings\GetDataLakeSettingsTrait;
    use GetEffectivePermissionsForPath\GetEffectivePermissionsForPathTrait;
    use GetLFTag\GetLFTagTrait;
    use GetQueryState\GetQueryStateTrait;
    use GetQueryStatistics\GetQueryStatisticsTrait;
    use GetResourceLFTags\GetResourceLFTagsTrait;
    use GetTableObjects\GetTableObjectsTrait;
    use GetTemporaryGluePartitionCredentials\GetTemporaryGluePartitionCredentialsTrait;
    use GetTemporaryGlueTableCredentials\GetTemporaryGlueTableCredentialsTrait;
    use GetWorkUnitResults\GetWorkUnitResultsTrait;
    use GetWorkUnits\GetWorkUnitsTrait;
    use GrantPermissions\GrantPermissionsTrait;
    use ListDataCellsFilter\ListDataCellsFilterTrait;
    use ListLFTags\ListLFTagsTrait;
    use ListPermissions\ListPermissionsTrait;
    use ListResources\ListResourcesTrait;
    use ListTableStorageOptimizers\ListTableStorageOptimizersTrait;
    use ListTransactions\ListTransactionsTrait;
    use PutDataLakeSettings\PutDataLakeSettingsTrait;
    use RegisterResource\RegisterResourceTrait;
    use RemoveLFTagsFromResource\RemoveLFTagsFromResourceTrait;
    use RevokePermissions\RevokePermissionsTrait;
    use SearchDatabasesByLFTags\SearchDatabasesByLFTagsTrait;
    use SearchTablesByLFTags\SearchTablesByLFTagsTrait;
    use StartQueryPlanning\StartQueryPlanningTrait;
    use StartTransaction\StartTransactionTrait;
    use UpdateDataCellsFilter\UpdateDataCellsFilterTrait;
    use UpdateLFTag\UpdateLFTagTrait;
    use UpdateResource\UpdateResourceTrait;
    use UpdateTableObjects\UpdateTableObjectsTrait;
    use UpdateTableStorageOptimizer\UpdateTableStorageOptimizerTrait;
}
