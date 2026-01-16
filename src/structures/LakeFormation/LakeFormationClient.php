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
    use CreateLFTagExpression\CreateLFTagExpressionTrait;
    use CreateLakeFormationIdentityCenterConfiguration\CreateLakeFormationIdentityCenterConfigurationTrait;
    use CreateLakeFormationOptIn\CreateLakeFormationOptInTrait;
    use DeleteDataCellsFilter\DeleteDataCellsFilterTrait;
    use DeleteLFTag\DeleteLFTagTrait;
    use DeleteLFTagExpression\DeleteLFTagExpressionTrait;
    use DeleteLakeFormationIdentityCenterConfiguration\DeleteLakeFormationIdentityCenterConfigurationTrait;
    use DeleteLakeFormationOptIn\DeleteLakeFormationOptInTrait;
    use DeleteObjectsOnCancel\DeleteObjectsOnCancelTrait;
    use DeregisterResource\DeregisterResourceTrait;
    use DescribeLakeFormationIdentityCenterConfiguration\DescribeLakeFormationIdentityCenterConfigurationTrait;
    use DescribeResource\DescribeResourceTrait;
    use DescribeTransaction\DescribeTransactionTrait;
    use ExtendTransaction\ExtendTransactionTrait;
    use GetDataCellsFilter\GetDataCellsFilterTrait;
    use GetDataLakePrincipal\GetDataLakePrincipalTrait;
    use GetDataLakeSettings\GetDataLakeSettingsTrait;
    use GetEffectivePermissionsForPath\GetEffectivePermissionsForPathTrait;
    use GetLFTag\GetLFTagTrait;
    use GetLFTagExpression\GetLFTagExpressionTrait;
    use GetQueryState\GetQueryStateTrait;
    use GetQueryStatistics\GetQueryStatisticsTrait;
    use GetResourceLFTags\GetResourceLFTagsTrait;
    use GetTableObjects\GetTableObjectsTrait;
    use GetTemporaryDataLocationCredentials\GetTemporaryDataLocationCredentialsTrait;
    use GetTemporaryGluePartitionCredentials\GetTemporaryGluePartitionCredentialsTrait;
    use GetTemporaryGlueTableCredentials\GetTemporaryGlueTableCredentialsTrait;
    use GetWorkUnitResults\GetWorkUnitResultsTrait;
    use GetWorkUnits\GetWorkUnitsTrait;
    use GrantPermissions\GrantPermissionsTrait;
    use ListDataCellsFilter\ListDataCellsFilterTrait;
    use ListLFTagExpressions\ListLFTagExpressionsTrait;
    use ListLFTags\ListLFTagsTrait;
    use ListLakeFormationOptIns\ListLakeFormationOptInsTrait;
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
    use UpdateLFTagExpression\UpdateLFTagExpressionTrait;
    use UpdateLakeFormationIdentityCenterConfiguration\UpdateLakeFormationIdentityCenterConfigurationTrait;
    use UpdateResource\UpdateResourceTrait;
    use UpdateTableObjects\UpdateTableObjectsTrait;
    use UpdateTableStorageOptimizer\UpdateTableStorageOptimizerTrait;
}
