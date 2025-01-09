<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'FAILED_ROLLBACK_IN_PROGRESS'|'FAILED_ROLLBACK_COMPLETED'|'FAILED_ROLLBACK_ERROR' $JobStatus
 * @property list<Shapes\AssetBundleImportJobError> $Errors
 * @property list<Shapes\AssetBundleImportJobError> $RollbackErrors
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $AssetBundleImportJobId
 * @property string $AwsAccountId
 * @property Shapes\AssetBundleImportSourceDescription $AssetBundleImportSource
 * @property Shapes\AssetBundleImportJobOverrideParameters $OverrideParameters
 * @property 'DO_NOTHING'|'ROLLBACK' $FailureAction
 * @property string $RequestId
 * @property int $Status
 * @property Shapes\AssetBundleImportJobOverridePermissions $OverridePermissions
 * @property Shapes\AssetBundleImportJobOverrideTags $OverrideTags
 * @property Shapes\AssetBundleImportJobOverrideValidationStrategy $OverrideValidationStrategy
 * @property list<Shapes\AssetBundleImportJobWarning> $Warnings
 */
class DescribeAssetBundleImportJobResponse extends Response
{
}
